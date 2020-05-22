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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelObMOSS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelDrDPHMOSS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Prijemce' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'IBAN' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => NULL,
        ],
        'BIC' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'PlneniCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'MOSSRefCislo' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'ElOdeslano' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'Pozn' =>
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
