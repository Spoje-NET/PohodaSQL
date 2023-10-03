<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKz
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKz extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKz';

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
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RelSkTyp' =>
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
        'RefStruct' =>
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
        'RelDPHn' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDPHp' =>
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
        'Obrat' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Odbyt' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SvazanaZas' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelSKzVC' =>
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
        'Vynos' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'Naklad' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'RelTpDPHp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpDPHv' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CheckTpDPHPDP' =>
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
        'SText1' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'SText2' =>
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
        'MJ2' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'MJ3' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'MJ2Koef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'MJ3Koef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'StavZ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'MinLim' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'MinMax' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Hmotnost' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Objem' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'NazevRP' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'RefSkEURO' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Rezer' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ObjedP' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ObjedV' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Reklam' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Servis' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'NakupC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'NakupDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'NakupCM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CMKodNC' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'VNakup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ProdejKc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ProdejDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ProdejCM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CMKodPC' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'RelTpFix' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Marze' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Rabat' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ObjMn' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ObjNazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'RefAD' =>
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
        'PLU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IObchod' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'mPohoda' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Obrazek' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => null,
        ],
        'Popis' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Popis2' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'FmtPopis' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'FmtPopis2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Vyrobce' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'ZpravaV' =>
        [
            'type' => 'varchar',
            'size' => '91',
            'default' => null,
        ],
        'ZpravaP' =>
        [
            'type' => 'varchar',
            'size' => '91',
            'default' => null,
        ],
        'RelZaruka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zaruka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'MJCn' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'MJCnKoef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'EditVyr' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'RefPzdJ' =>
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
        'Novinka' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Doprodej' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Akce' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Doporucujeme' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Sleva' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Priprav' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Dodani' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Doprava' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'TText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Template' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
    ];

    /**
     * SKz handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
