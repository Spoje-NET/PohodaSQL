<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of THO
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class THO extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tHO';

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
        'RefUcet' =>
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
        'RelPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpHO' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelObDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelObSH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelObKH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelMobch' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDruh' =>
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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatPlat' =>
        [
            'type' => 'datetime',
            'size' => null,
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
        'DatZdPln' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatKHDPH' =>
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
        'RelObMOSS' =>
        [
            'type' => 'int',
            'size' => '10',
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
        'KcU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'LikvCM' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'CenyIDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
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
        'IsCasRoz' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'TiskFM' =>
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
        'RelStavEET' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'StornoEET' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
     * tHO handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
