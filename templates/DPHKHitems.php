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
        'RelEdit' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelStatus' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSekce' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelVlivKHDPH' =>
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
        'StornOk' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DICOrig' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'CisloKHDPHOrig' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'DatKHDPHOrig' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'JmenoOrig' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'MistoOrig' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'A1DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'A1Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'A1DUZP' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'A1TaxBase' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A1RelSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'A1Kod' =>
        [
            'type' => 'varchar',
            'size' => '13',
            'default' => null,
        ],
        'A2DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'A2Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'A2DPPD' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'A2TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A2Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A2TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A2Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A2TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A2Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A2Group' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'A3DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'A3Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'A3DatNar' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'A3Misto' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'A3Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'A3DUP' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'A3TaxExemption' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A4DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'A4Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'A4DPPD' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'A4TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A4Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A4TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A4Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A4TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A4Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A4Kod' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'RelA4ZDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'A5TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A5Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A5TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A5Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A5TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'A5Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B1DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'B1Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'B1DUZP' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'B1TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B1Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B1TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B1Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B1TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B1Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B1Kod' =>
        [
            'type' => 'varchar',
            'size' => '13',
            'default' => null,
        ],
        'B2Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'B2DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'B2Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'B2DPPD' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'B2TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B2Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B2TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B2Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B2TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B2Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B2Ratio' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelB2ZDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'B3TaxBase1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B3Tax1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B3TaxBase2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B3Tax2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B3TaxBase3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'B3Tax3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'MAmount' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'text',
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
