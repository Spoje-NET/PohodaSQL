<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of CPNahr
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class CPNahr extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'CPNahr';

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
        'Typ' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'Stat' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Km' =>
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
        'UprSazba' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcNahr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'UprNahr' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * CPNahr handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
