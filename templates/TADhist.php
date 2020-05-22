<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TADhist
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TADhist extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tADhist';

    /**
     * SQL Table structure
     * @const array
     */
    const STRUCTURE = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefADdoc' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefEmail' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefDataBox' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Termin' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Akce' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Text1' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Text2' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => NULL,
        ],
        'Text3' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'Text4' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'Klic' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefCin' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CisloZAK' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'Ostatni' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Dopis' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Pozn2' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'TText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
    ];

    /**
     * tADhist handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
