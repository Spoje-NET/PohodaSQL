<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ADcn
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ADcn extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ADcn';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'RefPol' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStruct' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sleva' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Cena' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'SDph' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SlevaPC' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'CenaPC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
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
    ];

    /**
     * ADcn handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
