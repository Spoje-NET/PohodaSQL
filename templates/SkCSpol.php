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
            'default' => null,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefSkCeny' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Marze' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Rabat' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Sleva' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'UpravSEx' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'UpravS' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SDph' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelTpZkr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DenEUR' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'CmMnoz' =>
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
        'Pouzit' =>
        [
            'type' => 'bit',
            'size' => null,
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
