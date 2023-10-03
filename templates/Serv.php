<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of Serv
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Serv extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'Serv';

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
        'RelTpServ' =>
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
        'RelTpCalcDPH' =>
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
        'DatVyrDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatUkonceno' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatVyrizeno' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RefOsoba' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SKzNazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'SKzSText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'PredpCena' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Zaloha' =>
        [
            'type' => 'money',
            'size' => '19',
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
        'RefZeme' =>
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
        'RelTypDIC' =>
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
        'CisDokl' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'DatDokl' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RefZpPrij' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefZpVydej' =>
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
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Polozky' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'CenyIDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'Uzavreno' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'PopZavady' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
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
        'NullCheck_Cislo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * Serv handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
