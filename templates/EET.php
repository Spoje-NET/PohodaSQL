<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of EET
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class EET extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'EET';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelID' =>
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
        'DatTrzby' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'CelkovaTrzba' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'DatOdeslani' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatPrijeti' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelStavEET' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Overeni' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelRezim' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DICPoplat' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'DICPover' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'Provozovna' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zarizeni' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'PKP' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'BKP' =>
        [
            'type' => 'varchar',
            'size' => '44',
            'default' => null,
        ],
        'FIK' =>
        [
            'type' => 'varchar',
            'size' => '39',
            'default' => null,
        ],
        'ZmenaDokladu' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'UUID' =>
        [
            'type' => 'varchar',
            'size' => '36',
            'default' => null,
        ],
        'DatTrzbyPosun' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PrvniZaslani' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KodChyby' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PopisChyby' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'VerzeProt' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ZakladNepodlDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ZakladDan1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Dan1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ZakladDan2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Dan2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ZakladDan3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Dan3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CestovniSluzba' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'PouziteZbozi1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'PouziteZbozi2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'PouziteZbozi3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'UrcenoCerpZuct' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CerpZuct' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RefCert' =>
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
        'HistorieLog' =>
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
    ];

    /**
     * EET handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
