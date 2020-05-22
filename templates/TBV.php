<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TBV
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TBV extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tBV';

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
        'RefCin' =>
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
        'CisloZAK' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'RefUcet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpBV' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelObDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelObSH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelObKH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelMobch' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelDruh' =>
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
        'Polozky' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Vypis' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'ParSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '96',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatPlat' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelStorn' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'TpStorn' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'HistSzDPH' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DICRegDPHEU' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'MOSS' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'MOSSDukaz' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'RelObMOSS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelZpVypDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpCalcDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Kc0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Kc1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDPH1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Kc2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDPH2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Kc3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDPH3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZaokr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'LikvCM' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DenEUR' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'CmMnoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CmKurs' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Cm0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CmCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
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
        'Utvar' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'PSC' =>
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
        'ICO' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'ICDPH' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'RelTypDIC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => NULL,
        ],
        'KodBanky' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'SpecSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'KonstSym' =>
        [
            'type' => 'varchar',
            'size' => '4',
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
        'Lock' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Lock1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Pozn2' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'TText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
    ];

    /**
     * tBV handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
