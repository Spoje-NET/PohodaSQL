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
    const STRUCTURE = [
        'RefOper' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'RadekPD' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'RadekPV' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'PriVyd' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PenNaCeste' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DanNedan' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SelDPHObrat' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
