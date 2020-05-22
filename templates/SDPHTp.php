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
    const STRUCTURE = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Vydaj' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '120',
            'default' => NULL,
        ],
        'PlatneOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'PlatneDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Radky' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'Priznani' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KodPredmPln' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelVlivKHDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
