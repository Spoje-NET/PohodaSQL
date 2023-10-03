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
            'default' => null,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Stav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'C1' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'C2' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'C3' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'C3EN' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'C3GE' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '230',
            'default' => null,
        ],
        'STextEN' =>
        [
            'type' => 'varchar',
            'size' => '230',
            'default' => null,
        ],
        'STextGE' =>
        [
            'type' => 'varchar',
            'size' => '230',
            'default' => null,
        ],
        'Radek' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Sloup1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Sloup2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Sloup1P' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Sloup2P' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'HalerS1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'HalerS2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'HalerS1P' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'HalerS2P' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Priorita' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Cross1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Cross2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Cross1P' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SloupC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'SloupCP' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
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
