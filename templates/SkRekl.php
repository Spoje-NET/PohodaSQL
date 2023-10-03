<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SkRekl
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SkRekl extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SkRekl';

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
        'RefCin' =>
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
        'RelTpRekl' =>
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
        'RefSklad' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPrijem' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ZaokrFV' =>
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
        'Polozky' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RelCR' =>
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
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'SPopis' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatumDokl' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'CisDokl' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'RelStorn' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TpStorn' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DatObj' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'CisloObj' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Kc0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZaokr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DenEUR' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'CmMnoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CmKurs' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Cm0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmZaokr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Vyrizeno' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'BPrenes' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'Utvar' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'PSC' =>
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
        'Email' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'Tel' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'ICO' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'ICDPH' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'Firma2' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Utvar2' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Jmeno2' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Ulice2' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'PSC2' =>
        [
            'type' => 'varchar',
            'size' => '15',
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
        'Tel2' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'Email2' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'CenyIDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'AUcet' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'KJmeno' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'KUtvar' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'KTel' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'KEmail' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'RefZpVyr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ZpVyr' =>
        [
            'type' => 'varchar',
            'size' => '32',
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
        'Lock' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Lock1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Pozn2' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'DatumP' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatumO' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'SerText' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'SerPopis' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'SerRefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SerRefZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SerFirma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'SerUtvar' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SerJmeno' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'SerUlice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'SerPSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'SerObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'SerICO' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'SerDIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'SerICDPH' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'SerKJmeno' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'SerKUtvar' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SerKTel' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'SerKEmail' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'RelSerZpVyr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SerZpVyr' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SerZpPosl' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'NullCheck_Cislo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * SkRekl handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
