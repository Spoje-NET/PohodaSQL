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
            'default' => null,
        ],
        'AgID' =>
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
        'RefParam' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'FullList' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ValCurrency' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ValLong' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ValDouble' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ValText' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'ValDate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
