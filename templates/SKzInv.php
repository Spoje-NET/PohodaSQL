<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzInv
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzInv extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzInv';

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
        'UsrOrder' =>
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
        'RefSKz' =>
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
        'RefDokl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSkTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSkDruh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'AUcet' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'RelZcTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStruct' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefSklad' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSKzVC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'EAN' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'MJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'StavZ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'StavZsk' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'StavZroz' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'VNakup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VNakupC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VNakupJ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'PLU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Audit' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Prenes' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'PrenesInvSPol' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
    ];

    /**
     * SKzInv handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
