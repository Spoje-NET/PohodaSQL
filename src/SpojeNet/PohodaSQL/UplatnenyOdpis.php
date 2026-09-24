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

namespace SpojeNet\PohodaSQL;

/**
 * Description of IMuodpis.
 *
 * The monthly "uplatněný odpis" (applied depreciation) record of a
 * fixed-asset card (IM), one row per Mesic (month) linked via
 * RefAg -> IM.ID, additionally tied to a specific depreciation plan via
 * RefIMO -> sIMO.ID (see {@see OdpisovyPlan}). Distinct from {@see Odpis}
 * (IModpis, the plain yearly breakdown) - this table's name is the one
 * that most directly matches Pohoda's own "Uplatněný odpis v %" field
 * (its own Procento column). Confirmed 2026-09-23 against a live Pohoda
 * database (StwPh_10000001_2026) via `sys.foreign_keys`
 * (`IMuodpis.RefAg -> IM.ID`). Not previously modeled by this package.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class UplatnenyOdpis extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'IMuodpis';

    /**
     * SQL Table structure.
     *
     * @const array
     */
    public array $struct = [
        'ID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        // FK to IM.ID - the asset card this record belongs to.
        'RefAg' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelUzavreno' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Mesic' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        // FK to sIMO.ID (OdpisovyPlan) - the depreciation plan this
        // applied-depreciation record was calculated against.
        'RefIMO' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zivotnost' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KcVstup' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        // "Uplatněný odpis v %" for this month.
        'Procento' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KcOdpis' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcKorekce' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOdpisCalc' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZustatek' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
    ];

    /**
     * IMuodpis handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
