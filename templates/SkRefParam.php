<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SkRefParam
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SkRefParam extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SkRefParam';

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
        'AgID' =>
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
        'RefParam' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'FullList' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ValCurrency' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ValLong' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ValDouble' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ValText' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'ValDate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
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
     * SkRefParam handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
