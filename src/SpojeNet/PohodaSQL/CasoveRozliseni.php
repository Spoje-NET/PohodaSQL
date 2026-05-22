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
 * Time resolution (Časové rozlišení).
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class CasoveRozliseni extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'CasRoz';

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
        'Sel' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Cislo' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RelCR' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'VarSym' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'ParSym' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Datum' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelPk' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SText' => [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'RefAD' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Firma' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Utvar' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Jmeno' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Ulice' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'PSC' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Obec' => [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'RefZeme' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ICO' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'DIC' => [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'ICDPH' => [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'RelTypDIC' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAgID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelIDPol' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DoklText' => [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'DoklCislo' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'DoklDatum' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelDoklPk' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DoklKc' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCelkem' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelPerCasRoz' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZauctK' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatOd' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDo' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Rucne' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'DatUkonceni' => [
            'type' => 'datetime',
            'size' => null,
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
        'Oznacil' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Ucetni' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Lock' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Lock1' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Pozn' => [
            'type' => 'text',
            'size' => '2147483647',
            'default' => null,
        ],
        'NullCheck_Cislo' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * CasRoz handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, array $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
