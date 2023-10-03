<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PINTpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PINTpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'pINTpol';

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
        'ParSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
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
        'Mnozstvi' =>
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
        'JCbezDPH' =>
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
        'RelTpDPH' =>
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
        'RelTpPrepl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'MOSSDruh' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCin' =>
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
        'IsDocID' =>
        [
            'type' => 'varchar',
            'size' => '36',
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
     * pINTpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
