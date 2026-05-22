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
 * Time resolution line item (Položka časového rozlišení).
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class CasoveRozliseniPol extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'CasRozPol';

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
        'UsrOrder' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
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
        'DatumKO' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelPerCasRoz' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Kc' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcKorekce' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcUplat' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZustatek' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelPk' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStr' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCin' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloZAK' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'DatCreate' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * CasRozPol handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, array $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
