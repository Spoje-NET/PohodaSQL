<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ReklStav
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ReklStav extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ReklStav';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelReklStav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelReklZpVyr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PopisVyr' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'Servis' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZpPosl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisReklList' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'VCislo' =>
        [
            'type' => 'varchar',
            'size' => '48',
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
        'Vyrizeno' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KVyrizeni' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KVyrMJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'Prenes' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'PrenesMJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'RefOsoba' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'varchar',
            'size' => '90',
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
     * ReklStav handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
