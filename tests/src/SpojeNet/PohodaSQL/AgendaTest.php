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
use SpojeNet\PohodaSQL\Adresar;
use SpojeNet\PohodaSQL\BankovniVypis;
use SpojeNet\PohodaSQL\BankovniVypisPol;
use SpojeNet\PohodaSQL\CasoveRozliseni;
use SpojeNet\PohodaSQL\CasoveRozliseniPol;
use SpojeNet\PohodaSQL\CiselnaRada;
use SpojeNet\PohodaSQL\DOC;
use SpojeNet\PohodaSQL\Faktura;
use SpojeNet\PohodaSQL\FakturaPolozka;
use SpojeNet\PohodaSQL\HotovostniOperace;
use SpojeNet\PohodaSQL\HotovostniOperacePol;
use SpojeNet\PohodaSQL\Majetek;
use SpojeNet\PohodaSQL\MajetkoveOperace;
use SpojeNet\PohodaSQL\Nabidka;
use SpojeNet\PohodaSQL\NabidkaPol;
use SpojeNet\PohodaSQL\ObjednavkaPrijata;
use SpojeNet\PohodaSQL\ObjednavkaPrijataPol;
use SpojeNet\PohodaSQL\OdpisovyPlan;
use SpojeNet\PohodaSQL\Pokladna;
use SpojeNet\PohodaSQL\PokladnaPol;
use SpojeNet\PohodaSQL\Predkontace;
use SpojeNet\PohodaSQL\Predmet;
use SpojeNet\PohodaSQL\Uhrada;
use SpojeNet\PohodaSQL\Zamestnanec;
use SpojeNet\PohodaSQL\Zasilka;
use SpojeNet\PohodaSQL\ZasilkaPol;

class AgendaTest extends TestCase
{
    // --- existing classes ---

    public function testAdresarTable(): void
    {
        $this->assertSame('AD', (new Adresar())->myTable);
    }

    public function testAdresarStructColumns(): void
    {
        $struct = (new Adresar())->struct;
        foreach (['ID', 'Cislo', 'Firma', 'ICO', 'DIC', 'Email', 'ADSplatZav', 'ADKreditMax', 'RefDopravci'] as $col) {
            $this->assertArrayHasKey($col, $struct, "AD missing: {$col}");
        }
    }

    public function testFakturaTable(): void
    {
        $this->assertSame('FA', (new Faktura())->myTable);
    }

    public function testFakturaStructColumns(): void
    {
        $struct = (new Faktura())->struct;
        foreach (['DatZdPlnMOSS', 'MOSSOprava', 'KcUpr1', 'KcUpr2', 'KcUpr3',
            'KcUprDPH1', 'KcUprDPH2', 'KcUprDPH3', 'KcZUplat', 'KcCastZaloha', 'CmCastZaloha'] as $col) {
            $this->assertArrayHasKey($col, $struct, "FA missing: {$col}");
        }
    }

    public function testFakturaPolozkaTable(): void
    {
        $this->assertSame('FApol', (new FakturaPolozka())->myTable);
    }

    public function testFakturaPolozkaStructColumns(): void
    {
        $struct = (new FakturaPolozka())->struct;
        foreach (['RefParentZ', 'SeskupVC', 'PrenPolRezer', 'RefRcPr', 'STextRcPr',
            'KcRcPr', 'MJRcPr', 'MJKoefRcPr', 'DatLikvZal', 'DatVystZal'] as $col) {
            $this->assertArrayHasKey($col, $struct, "FApol missing: {$col}");
        }
    }

    public function testMajetekTable(): void
    {
        $this->assertSame('IM', (new Majetek())->myTable);
    }

    public function testMajetekStructColumns(): void
    {
        $struct = (new Majetek())->struct;
        foreach (['KcDanova', 'KcZustUcetni', 'RefAD', 'Firma', 'Lock', 'Lock1'] as $col) {
            $this->assertArrayHasKey($col, $struct, "IM missing: {$col}");
        }
    }

    public function testMajetkoveOperaceTable(): void
    {
        $this->assertSame('IMpohyb', (new MajetkoveOperace())->myTable);
    }

    public function testMajetkoveOperaceHasCisloZAK(): void
    {
        $this->assertArrayHasKey('CisloZAK', (new MajetkoveOperace())->struct);
    }

    public function testOdpisovyPlanTable(): void
    {
        $this->assertSame('sIMO', (new OdpisovyPlan())->myTable);
    }

    public function testOdpisovyPlanHasTimestamps(): void
    {
        $struct = (new OdpisovyPlan())->struct;
        $this->assertArrayHasKey('DatCreate', $struct);
        $this->assertArrayHasKey('DatSave', $struct);
    }

    public function testDOCTable(): void
    {
        $this->assertSame('DOC', (new DOC())->myTable);
    }

    public function testDOCStructColumns(): void
    {
        $struct = (new DOC())->struct;
        foreach (['RelDocType', 'Name', 'Url', 'Datum'] as $col) {
            $this->assertArrayHasKey($col, $struct, "DOC missing: {$col}");
        }
        $this->assertArrayNotHasKey('DatArchiv', $struct, 'DOC has non-existent DatArchiv');
    }

    public function testCiselnaRadaTable(): void
    {
        $this->assertSame('sCRady', (new CiselnaRada())->myTable);
    }

    public function testPredkontaceTable(): void
    {
        $this->assertSame('pPK', (new Predkontace())->myTable);
    }

    public function testPredmetTable(): void
    {
        $this->assertSame('IMpredm', (new Predmet())->myTable);
    }

    // --- new classes ---

    public function testBankovniVypisTable(): void
    {
        $this->assertSame('BV', (new BankovniVypis())->myTable);
    }

    public function testBankovniVypisHasKeyColumns(): void
    {
        $struct = (new BankovniVypis())->struct;
        foreach (['ID', 'Cislo', 'Datum', 'KcCelkem', 'RefAD', 'BankIdent'] as $col) {
            $this->assertArrayHasKey($col, $struct, "BV missing: {$col}");
        }
    }

    public function testBankovniVypisPolTable(): void
    {
        $this->assertSame('BVpol', (new BankovniVypisPol())->myTable);
    }

    public function testCasoveRozliseniTable(): void
    {
        $this->assertSame('CasRoz', (new CasoveRozliseni())->myTable);
    }

    public function testCasoveRozliseniPolTable(): void
    {
        $this->assertSame('CasRozPol', (new CasoveRozliseniPol())->myTable);
    }

    public function testHotovostniOperaceTable(): void
    {
        $this->assertSame('HO', (new HotovostniOperace())->myTable);
    }

    public function testHotovostniOperacePolTable(): void
    {
        $this->assertSame('HOpol', (new HotovostniOperacePol())->myTable);
    }

    public function testNabidkaTable(): void
    {
        $this->assertSame('NAB', (new Nabidka())->myTable);
    }

    public function testNabidkaPolTable(): void
    {
        $this->assertSame('NABpol', (new NabidkaPol())->myTable);
    }

    public function testObjednavkaPrijataTable(): void
    {
        $this->assertSame('OBJ', (new ObjednavkaPrijata())->myTable);
    }

    public function testObjednavkaPrijataPolTable(): void
    {
        $this->assertSame('OBJpol', (new ObjednavkaPrijataPol())->myTable);
    }

    public function testPokladnaTable(): void
    {
        $this->assertSame('PH', (new Pokladna())->myTable);
    }

    public function testPokladnaPolTable(): void
    {
        $this->assertSame('PHpol', (new PokladnaPol())->myTable);
    }

    public function testUhradaTable(): void
    {
        $this->assertSame('Uhrady', (new Uhrada())->myTable);
    }

    public function testZamestnanecTable(): void
    {
        $this->assertSame('ZAM', (new Zamestnanec())->myTable);
    }

    public function testZamestnanecHasKeyColumns(): void
    {
        $struct = (new Zamestnanec())->struct;
        foreach (['ID', 'Prijmeni', 'Jmeno', 'RodCisl', 'DatNar'] as $col) {
            $this->assertArrayHasKey($col, $struct, "ZAM missing: {$col}");
        }
    }

    public function testZasilkaTable(): void
    {
        $this->assertSame('Zasilky', (new Zasilka())->myTable);
    }

    public function testZasilkaPolTable(): void
    {
        $this->assertSame('ZasilkyPol', (new ZasilkaPol())->myTable);
    }
}
