<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPHMOSSpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPHMOSSpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPHMOSSpol';

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
        'Dodavatel' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'Zeme' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'RelSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ProcentoDPH' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'VatBase' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Vat' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
    ];

    /**
     * DPHMOSSpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
