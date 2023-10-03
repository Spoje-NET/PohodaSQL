<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TOBJ
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TOBJ extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tOBJ';

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
        'CisloZAK' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'RefZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpObj' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelForUh' =>
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
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
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
        'PDoklad' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SText' =>
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
        'DatOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDod' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'HistSzDPH' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DICRegDPHEU' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'MOSS' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'MOSSDukaz' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RelZpVypDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpCalcDPH' =>
        [
            'type' => 'int',
            'size' => '10',
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
        'KcCelkem' =>
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
        'CmCelkem' =>
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
        'Vyrizeno' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'BDodano' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'TrvalyDok' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Rezer' =>
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
        'RelTypDIC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Email' =>
        [
            'type' => 'varchar',
            'size' => '98',
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
        'RefDopravci' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatVytEZ' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Tel' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'GSM' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'Fax' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'RelTpIo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IoID' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'DatStorn' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'mPohoda' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelDruh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Oznacil' =>
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
        'tmpEshopObjID' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'tmpEshopIoID' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'RefEETProfil' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
    ];

    /**
     * tOBJ handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
