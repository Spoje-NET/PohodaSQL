<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of QAgSKzPoh
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class QAgSKzPoh extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'qAgSKzPoh';

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
            'default' => NULL,
        ],
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RelSKZpAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelIDV' =>
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
        'RefUD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'OrderFld' =>
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
        'RefSkSkup' =>
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
        'Nazev1' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'Nazev2' =>
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
        'Zaruka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelZaruka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelOP' =>
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
        'PohPMJ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'PohKc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcCelkemPoh' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcOceneni' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VNakup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZisk' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcCZisk' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'StavZ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'SkUMD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'SkUD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'RefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefADdod' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'ICO' =>
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
        'RefZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Firma2' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Jmeno2' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Obec2' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'RefZeme2' =>
        [
            'type' => 'int',
            'size' => '10',
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
        'VCislo' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'SKzSKzVC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PolSKzVC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatExp' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'PzdAut' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * qAgSKzPoh handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
