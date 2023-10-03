<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of MZvvz
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class MZvvz extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'MZvvz';

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
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelMes' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcSocZak' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'DnyKal' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DnyPrac' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'NahrDoby' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
    ];

    /**
     * MZvvz handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
