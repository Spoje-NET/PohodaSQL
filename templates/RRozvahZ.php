<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of RRozvahZ
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class RRozvahZ extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'rRozvahZ';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Stav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'C1' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'C2' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'C3' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'C3EN' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'C3GE' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '230',
            'default' => NULL,
        ],
        'STextEN' =>
        [
            'type' => 'varchar',
            'size' => '230',
            'default' => NULL,
        ],
        'STextGE' =>
        [
            'type' => 'varchar',
            'size' => '230',
            'default' => NULL,
        ],
        'Radek' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'Sloup1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Sloup2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Sloup1P' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Sloup2P' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'HalerS1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'HalerS2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'HalerS1P' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'HalerS2P' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Priorita' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Cross1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Cross2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Cross1P' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SloupC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'SloupCP' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
    ];

    /**
     * rRozvahZ handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
