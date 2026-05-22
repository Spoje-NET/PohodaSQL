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
 * Shipment (Zásilka).
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Zasilka extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'Zasilky';

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
        'Sel' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefDopravci' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
        'RelStavEz' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Datum' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatExport' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RefAD' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefADdod' => [
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
        'Email' => [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'Firma2' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Utvar2' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Jmeno2' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Ulice2' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'PSC2' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Obec2' => [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'RefZeme2' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Tel2' => [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'Email2' => [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'Tel' => [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'GSM' => [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'Fax' => [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'RefCin' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStr' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloZAK' => [
            'type' => 'varchar',
            'size' => '12',
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
        'RelAg' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelID' => [
            'type' => 'int',
            'size' => '10',
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
        'NullCheck_Cislo' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * Zasilky handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, array $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
