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
        'Storno' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'Pocet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Kc0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
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
