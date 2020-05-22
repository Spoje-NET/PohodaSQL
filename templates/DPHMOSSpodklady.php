<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPHMOSSpodklady
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPHMOSSpodklady extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPHMOSSpodklady';

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
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DoklID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Dodavatel' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'Zeme' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'MOSSDruh' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CmMnoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CmKurs' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => NULL,
        ],
        'STextPol' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'RelSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ProcentoDPH' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'VatBase' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Vat' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VatBaseEUR' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VatEUR' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'Obec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'MOSSDukaz' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
    ];

    /**
     * DPHMOSSpodklady handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
