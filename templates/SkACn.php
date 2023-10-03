<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SkACn
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SkACn extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SkACn';

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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'DatOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Sleva' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RefSkCeny' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'UseZkr' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelTpZkr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Skupina' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * SkACn handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
