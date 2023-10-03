<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SDPHTp
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SDPHTp extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sDPHTp';

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
        'Vydaj' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '120',
            'default' => null,
        ],
        'PlatneOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'PlatneDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Radky' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Priznani' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KodPredmPln' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelVlivKHDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * sDPHTp handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
