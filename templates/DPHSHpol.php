<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPHSHpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPHSHpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPHSHpol';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Storno' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'Pocet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Kc0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Kc1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDPH1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Kc2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDPH2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Kc3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDPH3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
    ];

    /**
     * DPHSHpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
