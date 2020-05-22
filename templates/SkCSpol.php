<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SkCSpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SkCSpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SkCSpol';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefSkCeny' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Marze' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Rabat' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Sleva' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'UpravSEx' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'UpravS' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SDph' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelTpZkr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DenEUR' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'CmMnoz' =>
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
        'Pouzit' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
    ];

    /**
     * SkCSpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
