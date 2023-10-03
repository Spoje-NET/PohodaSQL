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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '6',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Slozka' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RefPzdJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefSklad' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sklady' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'RefFormUh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SelFormUh' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefSkCeny' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefProvozovna' =>
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
        'RefEETProfil' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zip' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Adresar' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefFilter' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelKasaTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TextPh' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'Paticka' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'SlevaPol' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SDph' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ProdPLU' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ImpSKPV' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ImpHO' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ImPoDnech' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ClientTS' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'AllowedPC' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'AllowedTS' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'TouchScreen' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'PouzivatUcty' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KasaMonitor' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefKasaMonitor' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SwKeyboard' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Settings' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'AutSyncPhOff' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'NExportData' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefCRSKPV' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefFormUhSKPV' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TextSKPV' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'mServer' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'mKasaGUID' =>
        [
            'type' => 'varchar',
            'size' => '36',
            'default' => null,
        ],
        'GuidJ' =>
        [
            'type' => 'varchar',
            'size' => '32',
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
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
