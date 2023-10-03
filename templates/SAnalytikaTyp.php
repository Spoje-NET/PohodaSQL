<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SAnalytikaTyp
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SAnalytikaTyp extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sAnalytikaTyp';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [
        'RefOper' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'RadekPD' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'RadekPV' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'PriVyd' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PenNaCeste' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DanNedan' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SelDPHObrat' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
    ];

    /**
     * sAnalytikaTyp handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
