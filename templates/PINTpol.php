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
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefSKz0' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefPol' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ParSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Mnozstvi' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'MJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'MJKoef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'KcJedn' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Sleva' =>
        [
            'type' => 'float',
            'size' => '53',
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
        'SDph' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CmJedn' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Cm' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CmDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'JCbezDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RelPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PDP' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelTpPrepl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'MOSSDruh' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefCin' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CisloZAK' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'IsDocID' =>
        [
            'type' => 'varchar',
            'size' => '36',
            'default' => NULL,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
