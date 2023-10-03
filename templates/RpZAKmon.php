<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of RpZAKmon
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class RpZAKmon extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'rpZAKmon';

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
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefZAK' =>
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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatZdPln' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSplat' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelMesic' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'OrderAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZakAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelRealAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPolID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
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
        'RefStruct' =>
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
        'EAN' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'VCislo' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'RelDruhOper' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefSKzPoh' =>
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
        'KcNaklad' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVynos' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPlanNakladu' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPlanVynosu' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOstatni' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVNC' =>
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
        'RelPolTyp' =>
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
        'RelPolAgID' =>
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
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'PoznPol' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Zdroj' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'PlZahaj' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'PlPredani' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Zahajeni' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Predani' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RefStav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelReklStav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelServStav' =>
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
    ];

    /**
     * rpZAKmon handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
