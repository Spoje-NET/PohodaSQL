<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SCRady
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SCRady extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sCRady';

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
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefIDor' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'RelCrAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelCrTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCrUc' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPzdJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpObd' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'mPohoda' =>
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
     * sCRady handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
