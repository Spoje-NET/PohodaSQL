<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of CPSmeny
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class CPSmeny extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'CPSmeny';

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
        'KcZMeny' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RefCMz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcNaMenu' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RefCMna' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelCmMn' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CmKurs' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Kursy' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KcPopl' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RefCMPop' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Smena' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'Pouzit' =>
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
     * CPSmeny handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
