<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of RVyslZSc
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class RVyslZSc extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'rVyslZSc';

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
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Soucet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Minus' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Od' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Do' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Priznak' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * rVyslZSc handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
