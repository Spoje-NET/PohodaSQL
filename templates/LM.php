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
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpLM' =>
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
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'RefAD' =>
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
        'SpecSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'KonstSym' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => NULL,
        ],
        'DatSmlouvy' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatZar' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatKonec' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatVyr' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatSpl' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Zahrnout' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefIMmist' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefIMclen' =>
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
        'Status' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => NULL,
        ],
        'Podnikani' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => NULL,
        ],
        'Limit' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Pocet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatPrvni' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatDruha' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'FixDPH' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Prevod' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'NullCheck_Cislo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
