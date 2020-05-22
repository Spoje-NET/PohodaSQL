<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPHKHitems
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPHKHitems extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPHKHitems';

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
        'RelEdit' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelStatus' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSekce' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelVlivKHDPH' =>
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
        'StornOk' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DICOrig' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'CisloKHDPHOrig' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'DatKHDPHOrig' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'JmenoOrig' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'MistoOrig' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'A1DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'A1Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'A1DUZP' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'A1TaxBase' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A1RelSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'A1Kod' =>
        [
            'type' => 'varchar',
            'size' => '13',
            'default' => NULL,
        ],
        'A2DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'A2Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'A2DPPD' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'A2TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A2Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A2TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A2Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A2TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A2Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A2Group' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'A3DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'A3Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'A3DatNar' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'A3Misto' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'A3Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'A3DUP' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'A3TaxExemption' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A4DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'A4Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'A4DPPD' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'A4TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A4Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A4TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A4Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A4TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A4Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A4Kod' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'RelA4ZDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'A5TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A5Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A5TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A5Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A5TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'A5Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B1DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'B1Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'B1DUZP' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'B1TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B1Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B1TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B1Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B1TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B1Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B1Kod' =>
        [
            'type' => 'varchar',
            'size' => '13',
            'default' => NULL,
        ],
        'B2Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'B2DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'B2Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'B2DPPD' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'B2TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B2Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B2TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B2Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B2TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B2Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B2Ratio' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelB2ZDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'B3TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B3Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B3TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B3Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B3TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'B3Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'MAmount' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'text',
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
    ];

    /**
     * DPHKHitems handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
