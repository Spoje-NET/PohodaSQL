<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TCPSmeny
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TCPSmeny extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tCPSmeny';

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
        'KcZMeny' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RefCMz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcNaMenu' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RefCMna' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelCmMn' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CmKurs' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Kursy' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcPopl' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RefCMPop' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Smena' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'Pouzit' =>
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
        'TText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
    ];

    /**
     * tCPSmeny handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
