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
        'RefCin' =>
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
        'CisloZAK' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ParSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'RelTpIM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSkOdp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'UcZust' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelPoDatum' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpOdp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpLik' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZpVyr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZpPor' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Vyuziti' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'RefIMO' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zivotnost' =>
        [
            'type' => 'float',
            'size' => '53',
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
        'Prevod' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Upraveno' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Uzavreno' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'Datum' =>
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
        'DatLikv' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOdeps' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcLikv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZust' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ZauctLikv' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Vyuzito' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RokZvys' =>
        [
            'type' => 'smallint',
            'size' => '5',
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
