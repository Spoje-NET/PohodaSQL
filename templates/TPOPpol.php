<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TPOPpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TPOPpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tPOPpol';

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
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefSKz0' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPol' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'VCislo' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'SKzVC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Mnozstvi' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Prenes' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'PrenesBfr' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'MJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'MJKoef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KcJedn' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Sleva' =>
        [
            'type' => 'float',
            'size' => '53',
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
        'SDph' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmJedn' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Cm' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PDP' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'MOSSDruh' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'RelTypPolEET' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DICPover' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'RefCin' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloZAK' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * tPOPpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
