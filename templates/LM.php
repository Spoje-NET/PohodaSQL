<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of LM
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class LM extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'LM';

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
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpLM' =>
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
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'RefAD' =>
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
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => null,
        ],
        'KodBanky' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'SpecSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'KonstSym' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => null,
        ],
        'DatSmlouvy' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatZar' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatKonec' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatVyr' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSpl' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Zahrnout' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefIMmist' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefIMclen' =>
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
        'Status' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => null,
        ],
        'Podnikani' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => null,
        ],
        'Limit' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Pocet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatPrvni' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDruha' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'FixDPH' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Prevod' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'Pozn2' =>
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
        'NullCheck_Cislo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * LM handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
