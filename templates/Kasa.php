<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of Kasa
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Kasa extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'Kasa';

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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '6',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Slozka' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RefPzdJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefSklad' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Sklady' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'RefFormUh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SelFormUh' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefSkCeny' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefProvozovna' =>
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
        'RefEETProfil' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Zip' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Adresar' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefFilter' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelKasaTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'TextPh' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => NULL,
        ],
        'Paticka' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => NULL,
        ],
        'SlevaPol' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SDph' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ProdPLU' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ImpSKPV' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ImpHO' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ImPoDnech' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ClientTS' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'AllowedPC' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'AllowedTS' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'TouchScreen' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'PouzivatUcty' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KasaMonitor' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefKasaMonitor' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SwKeyboard' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Settings' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'AutSyncPhOff' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'NExportData' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefCRSKPV' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefFormUhSKPV' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'TextSKPV' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => NULL,
        ],
        'mServer' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'mKasaGUID' =>
        [
            'type' => 'varchar',
            'size' => '36',
            'default' => NULL,
        ],
        'GuidJ' =>
        [
            'type' => 'varchar',
            'size' => '32',
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
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * Kasa handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
