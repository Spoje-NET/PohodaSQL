<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPHSHCallOfStock
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPHSHCallOfStock extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPHSHCallOfStock';

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
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'DICpuvodni' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'RelKod' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * DPHSHCallOfStock handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
