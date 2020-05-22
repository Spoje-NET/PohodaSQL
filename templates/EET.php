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
    const STRUCTURE = [
        'ID' =>
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
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelID' =>
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
        'DatTrzby' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'CelkovaTrzba' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'DatOdeslani' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatPrijeti' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelStavEET' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Overeni' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelRezim' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DICPoplat' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'DICPover' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'Provozovna' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Zarizeni' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'PKP' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'BKP' =>
        [
            'type' => 'varchar',
            'size' => '44',
            'default' => NULL,
        ],
        'FIK' =>
        [
            'type' => 'varchar',
            'size' => '39',
            'default' => NULL,
        ],
        'ZmenaDokladu' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'UUID' =>
        [
            'type' => 'varchar',
            'size' => '36',
            'default' => NULL,
        ],
        'DatTrzbyPosun' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PrvniZaslani' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KodChyby' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PopisChyby' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'VerzeProt' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ZakladNepodlDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ZakladDan1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Dan1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ZakladDan2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Dan2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ZakladDan3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Dan3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CestovniSluzba' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'PouziteZbozi1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'PouziteZbozi2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'PouziteZbozi3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'UrcenoCerpZuct' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CerpZuct' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RefCert' =>
        [
            'type' => 'int',
            'size' => '10',
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
        'HistorieLog' =>
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
