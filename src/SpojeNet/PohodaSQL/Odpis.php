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
 * Description of IModpis.
 *
 * The yearly depreciation breakdown of a fixed-asset card (IM), one row
 * per Rok (year) linked via RefAg -> IM.ID, carrying that year's own
 * Procento (the "uplatněný odpis v %" applied for the year) plus the
 * resulting KcOdpis/KcZust/... amounts. Confirmed 2026-09-17 against a
 * live Pohoda database (StwPh_03411541_2026) via `sys.foreign_keys`
 * (`IModpis.RefAg -> IM.ID`). Not previously modeled by this package.
 *
 * @see OdpisMesicni    monthly breakdown of the same figures (IModpisM)
 * @see UplatnenyOdpis  monthly "uplatněný odpis" record tied to a
 *                      specific depreciation plan (IMuodpis)
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Odpis extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'IModpis';

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
        // FK to IM.ID - the asset card this yearly breakdown belongs to.
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
        'Rok' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatumKHO' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelSkOdp' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ZivotnNM' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpOdp' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        // "Uplatněný odpis v %" for this year.
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
        'KcZvCeny' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVstup' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVstupB' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZust' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZustVyrazeni' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ZCelku' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
    ];

    /**
     * IModpis handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
