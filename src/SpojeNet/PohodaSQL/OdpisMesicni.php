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
 * Description of IModpisM.
 *
 * The monthly depreciation breakdown of a fixed-asset card (IM), one row
 * per Mesic (month) linked via RefAg -> IM.ID. Sibling of {@see Odpis}
 * (the yearly breakdown, IModpis). Confirmed 2026-09-17 against a live
 * Pohoda database (StwPh_03411541_2026) via `sys.foreign_keys`
 * (`IModpisM.RefAg -> IM.ID`). Not previously modeled by this package.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class OdpisMesicni extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'IModpisM';

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
        // FK to IM.ID - the asset card this monthly breakdown belongs to.
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
        'KcOdpisM' => [
            'type' => 'money',
            'size' => '19',
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
        'ZCelku' => [
            'type' => 'float',
            'size' => '53',
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
        'KcVyrazeno' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
    ];

    /**
     * IModpisM handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
