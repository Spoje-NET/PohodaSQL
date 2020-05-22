<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of IM
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Majetek extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'IM';

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
        'RefCin' =>
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
        'CisloZAK' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ParSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'RelTpIM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSkOdp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'UcZust' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RelPoDatum' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpOdp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpLik' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelZpVyr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelZpPor' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Vyuziti' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'RefIMO' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Zivotnost' =>
        [
            'type' => 'float',
            'size' => '53',
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
        'Prevod' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Upraveno' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Uzavreno' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'Datum' =>
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
        'DatLikv' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcOdeps' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcLikv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZust' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ZauctLikv' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Vyuzito' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'RokZvys' =>
        [
            'type' => 'smallint',
            'size' => '5',
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
     * IM handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
