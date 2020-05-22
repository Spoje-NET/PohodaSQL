<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TCPNahr
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TCPNahr extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tCPNahr';

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
        'TText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
    ];

    /**
     * tCPNahr handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
