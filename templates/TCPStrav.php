<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TCPStrav
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TCPStrav extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tCPStrav';

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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CM' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'Hodin' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Doba' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KcSazba' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcLegStr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Uprava' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Snidane' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Obed' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Vecere' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcKapes' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kratit' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcStrav' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
    ];

    /**
     * tCPStrav handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
