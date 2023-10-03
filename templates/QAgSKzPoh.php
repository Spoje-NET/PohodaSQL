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
            'default' => null,
        ],
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RelSKZpAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelIDV' =>
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
        'RefUD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'OrderFld' =>
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
        'RefSkSkup' =>
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
        'Nazev1' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'Nazev2' =>
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
        'Zaruka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZaruka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelOP' =>
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
        'PohPMJ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'PohKc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCelkemPoh' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOceneni' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VNakup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZisk' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCZisk' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'StavZ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'SkUMD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'SkUD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefADdod' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'ICO' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Obec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'RefZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Firma2' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Jmeno2' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Obec2' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'RefZeme2' =>
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
        'VCislo' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'SKzSKzVC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PolSKzVC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatExp' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'PzdAut' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
