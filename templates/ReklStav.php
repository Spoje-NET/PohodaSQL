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
    const STRUCTURE = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelReklStav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelReklZpVyr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PopisVyr' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => NULL,
        ],
        'Servis' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelZpPosl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CisReklList' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'VCislo' =>
        [
            'type' => 'varchar',
            'size' => '48',
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
        'Vyrizeno' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KVyrizeni' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'KVyrMJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'Prenes' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'PrenesMJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'RefOsoba' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'varchar',
            'size' => '90',
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
