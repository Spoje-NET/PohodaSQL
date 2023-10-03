<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPHMOSS
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPHMOSS extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPHMOSS';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelObMOSS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDrDPHMOSS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Prijemce' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'IBAN' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => null,
        ],
        'BIC' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'PlneniCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'MOSSRefCislo' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'ElOdeslano' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * DPHMOSS handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
