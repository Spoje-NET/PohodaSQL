<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of RRozvZRd
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class RRozvZRd extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'rRozvZRd';

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
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SUcet' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'Minus' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Radek' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sloupec' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * rRozvZRd handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
