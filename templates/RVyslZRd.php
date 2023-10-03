<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of RVyslZRd
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class RVyslZRd extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'rVyslZRd';

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
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SUcet' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'Minus' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Radek' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * rVyslZRd handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
