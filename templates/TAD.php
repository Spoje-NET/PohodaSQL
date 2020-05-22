<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TAD
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TAD extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tAD';

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
        'RefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'RelCR' =>
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
        'Okres' =>
        [
            'type' => 'varchar',
            'size' => '32',
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
        'Tel' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => NULL,
        ],
        'Fax' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => NULL,
        ],
        'GSM' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => NULL,
        ],
        'Email' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => NULL,
        ],
        'WWW' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Skype' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'ICQ' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'GPS' =>
        [
            'type' => 'varchar',
            'size' => '38',
            'default' => NULL,
        ],
        'DataBox' =>
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
        'RelForUh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ADSplat' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'ADToler' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ADKredit' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcObrat' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcObrat2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Skupina' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Klic' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'P1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'P2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'P3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'P4' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'P5' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'P6' =>
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
        'RelDruh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Ost1' =>
        [
            'type' => 'varchar',
            'size' => '8',
            'default' => NULL,
        ],
        'Ost2' =>
        [
            'type' => 'varchar',
            'size' => '8',
            'default' => NULL,
        ],
        'Zprava' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Smlouva' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'Funkce' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'Osloveni' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'DatNar' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelPohl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpIo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IoID' =>
        [
            'type' => 'varchar',
            'size' => '35',
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
        'RelPkFP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpDPHFP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelPkFV' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpDPHFV' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefUcetFV' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefOsoba' =>
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
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSzDPHskz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'GdprDatPreAkt' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'GdprDatPreHist' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'GdprDatProAkt' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'GdprDatProHist' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'GdprDatPostAkt' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'GdprDatPostHist' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'GdprOmezeniZprac' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
     * tAD handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
