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
        'Typ' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'Stat' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Km' =>
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
        'UprSazba' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcNahr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'UprNahr' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
