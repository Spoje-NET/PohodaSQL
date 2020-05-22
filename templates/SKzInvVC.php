<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzInvVC
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzInvVC extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzInvVC';

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
        'UsrOrder' =>
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
        'RefInvPol' =>
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
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefDokl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSkTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSkDruh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'AUcet' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'RelZcTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefStruct' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefSklad' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSKzVC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'EAN' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'MJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'VCislo' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'StavZ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'StavZsk' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'StavZroz' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'VNakup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VNakupC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'PLU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Audit' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Prenes' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'PrenesInvSPol' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Zauct' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
    ];

    /**
     * SKzInvVC handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
