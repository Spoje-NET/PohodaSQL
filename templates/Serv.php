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
            'default' => false,
        ],
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RelTpServ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelServStav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'RelCR' =>
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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatVyrDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatUkonceno' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatVyrizeno' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RefOsoba' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => NULL,
        ],
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SKzNazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'SKzSText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'PredpCena' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Zaloha' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
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
        'KcZaokr' =>
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
        'CmZaokr' =>
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
        'Vyrizeno' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'BPrenes' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'RefZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Email' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => NULL,
        ],
        'Tel' =>
        [
            'type' => 'varchar',
            'size' => '40',
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
        'Firma2' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Utvar2' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Jmeno2' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Ulice2' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'PSC2' =>
        [
            'type' => 'varchar',
            'size' => '15',
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
        'Tel2' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => NULL,
        ],
        'Email2' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => NULL,
        ],
        'KJmeno' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'KUtvar' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'KTel' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => NULL,
        ],
        'KEmail' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => NULL,
        ],
        'CisDokl' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'DatDokl' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RefZpPrij' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefZpVydej' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ZaokrFV' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Polozky' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'CenyIDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'Uzavreno' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'PopZavady' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
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
        'NullCheck_Cislo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
