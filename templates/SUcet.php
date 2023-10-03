<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SUcet
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SUcet extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sUcet';

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
        'RelJeUcet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => null,
        ],
        'SpecSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'KodBanky' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'Banka' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Zrusen' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Swift' =>
        [
            'type' => 'varchar',
            'size' => '30',
            'default' => null,
        ],
        'IBAN' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => null,
        ],
        'AUcet' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'SEPA' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcStav' =>
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
        'KCmPev' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefHB' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTermHwTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefUsr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPzdJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RegDoklFM' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'mPohoda' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
     * sUcet handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
