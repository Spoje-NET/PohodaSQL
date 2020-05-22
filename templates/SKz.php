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
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RelSkTyp' =>
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
        'RefStruct' =>
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
        'RelDPHn' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelDPHp' =>
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
        'Obrat' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Odbyt' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SvazanaZas' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelSKzVC' =>
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
        'Vynos' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'Naklad' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'RelTpDPHp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpDPHv' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CheckTpDPHPDP' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'MOSSDruh' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
        'SText1' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'SText2' =>
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
        'MJ2' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'MJ3' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'MJ2Koef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'MJ3Koef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'StavZ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'MinLim' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'MinMax' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Hmotnost' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Objem' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'NazevRP' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => NULL,
        ],
        'RefSkEURO' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Rezer' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ObjedP' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ObjedV' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Reklam' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Servis' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'NakupC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'NakupDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'NakupCM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CMKodNC' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'VNakup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ProdejKc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ProdejDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ProdejCM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CMKodPC' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'RelTpFix' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Marze' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Rabat' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ObjMn' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ObjNazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'RefAD' =>
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
        'PLU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IObchod' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'mPohoda' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Obrazek' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => NULL,
        ],
        'Popis' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Popis2' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'FmtPopis' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'FmtPopis2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Vyrobce' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'ZpravaV' =>
        [
            'type' => 'varchar',
            'size' => '91',
            'default' => NULL,
        ],
        'ZpravaP' =>
        [
            'type' => 'varchar',
            'size' => '91',
            'default' => NULL,
        ],
        'RelZaruka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Zaruka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'MJCn' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'MJCnKoef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'EditVyr' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelTypPolEET' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DICPover' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'RefPzdJ' =>
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
        'Novinka' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Doprodej' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Akce' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Doporucujeme' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Sleva' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Priprav' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Dodani' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Doprava' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'TText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Template' =>
        [
            'type' => 'bit',
            'size' => NULL,
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
