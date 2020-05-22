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
    const STRUCTURE = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelMes' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcSocZak' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'DnyKal' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DnyPrac' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'NahrDoby' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
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
