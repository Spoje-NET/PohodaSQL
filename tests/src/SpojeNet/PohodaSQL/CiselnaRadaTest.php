<?php

declare(strict_types=1);

/**
 * This file is part of the PohodaSQL package
 *
 * https://github.com/Spoje-NET/PohodaSQL
 *
 * (c) Spoje.Net <https://spoje.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test\SpojeNet\PohodaSQL;

use PHPUnit\Framework\TestCase;
use SpojeNet\PohodaSQL\CiselnaRada;

/**
 * Regression tests for the agenda-scoped číselná řada lookup/creation.
 *
 * Covers the bug that let number series of different Pohoda agendas
 * collide (e.g. an asset-import series colliding with the Vydané/Přijaté
 * faktury series in company StwPh_26205882_2026): CiselnaRada::isKnown()
 * used to match on Rok+IDS only, and CiselnaRada::init() never persisted
 * RelCrAg on auto-created rows.
 */
class CiselnaRadaTest extends TestCase
{
    private \PDO $pdo;

    protected function setUp(): void
    {
        $this->pdo = new \PDO('sqlite::memory:');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->pdo->exec(
            'CREATE TABLE sCRady (
                ID INTEGER PRIMARY KEY AUTOINCREMENT,
                Rok INTEGER,
                IDS TEXT,
                Cislo TEXT,
                SText TEXT,
                RelCrAg INTEGER,
                Pozn TEXT,
                DatCreate TEXT,
                DatSave TEXT
            )',
        );
    }

    private function newRada(): CiselnaRada
    {
        $rada = new CiselnaRada();
        $rada->pdo = $this->pdo;
        $rada->dbType = 'sqlite';

        return $rada;
    }

    public function testIsKnownScopesLookupByAgenda(): void
    {
        $this->pdo->exec("INSERT INTO sCRady (Rok, IDS, Cislo, RelCrAg) VALUES (2026, '2612', '00001', 2)");
        $this->pdo->exec("INSERT INTO sCRady (Rok, IDS, Cislo, RelCrAg) VALUES (2026, '2612', '00001', 3)");

        $rada = $this->newRada();
        $rada->setDataValue('Rok', 2026);

        $this->assertSame(1, $rada->isKnown('2612', 2), 'should match the row tagged for agenda 2');
        $this->assertSame(2, $rada->isKnown('2612', 3), 'should match the row tagged for agenda 3, not agenda 2');
    }

    public function testIsKnownIgnoresRowsWithNullAgendaWhenAgendaRequested(): void
    {
        $this->pdo->exec("INSERT INTO sCRady (Rok, IDS, Cislo, RelCrAg) VALUES (2026, '20020', '00001', NULL)");

        $rada = $this->newRada();
        $rada->setDataValue('Rok', 2026);

        $this->assertSame(
            0,
            $rada->isKnown('20020', 44),
            'a legacy row with RelCrAg IS NULL must not be silently reused for a different agenda',
        );
    }

    public function testIsKnownWithoutAgendaKeepsLegacyBehaviour(): void
    {
        $this->pdo->exec("INSERT INTO sCRady (Rok, IDS, Cislo, RelCrAg) VALUES (2026, '2602', '00001', 2)");

        $rada = $this->newRada();
        $rada->setDataValue('Rok', 2026);

        $this->assertSame(1, $rada->isKnown('2602'));
    }

    public function testInitPersistsRelCrAgOnAutoCreatedRow(): void
    {
        $rada = $this->newRada();
        $rada->init('MAJB', 5, 'Majetek - byty', 5, 2026);

        $id = $rada->getMyKey();
        $this->assertNotEmpty($id);

        $stored = $this->pdo->query('SELECT RelCrAg FROM sCRady WHERE ID = '.(int) $id)->fetch(\PDO::FETCH_ASSOC);
        $this->assertSame(5, (int) $stored['RelCrAg'], 'auto-created row must keep its RelCrAg, not NULL');
    }

    public function testInitReusesExistingRowOfSameAgenda(): void
    {
        $first = $this->newRada();
        $first->init('MAJB', 5, 'Majetek - byty', 5, 2026);
        $firstId = $first->getMyKey();

        $second = $this->newRada();
        $second->init('MAJB', 5, 'Majetek - byty', 5, 2026);

        $this->assertSame($firstId, $second->getMyKey(), 'a second init() for the same IDS+agenda must reuse the row, not duplicate it');
    }

    public function testInitForDifferentAgendaDoesNotReuseOtherAgendasRow(): void
    {
        $invoices = $this->newRada();
        $invoices->init('2612', 3, 'Přijaté faktury', 5, 2026);

        $assets = $this->newRada();
        $assets->init('2612', 5, 'Majetek', 5, 2026);

        $this->assertNotSame(
            $invoices->getMyKey(),
            $assets->getMyKey(),
            'a colliding IDS used by two different agendas must not resolve to the same sCRady row',
        );
    }
}
