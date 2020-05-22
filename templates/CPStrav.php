<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of CPStrav
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class CPStrav extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'CPStrav';

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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CM' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'Hodin' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Doba' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'KcSazba' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcLegStr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Uprava' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Snidane' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Obed' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Vecere' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KcKapes' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Kratit' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcStrav' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * CPStrav handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
