<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of POS
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class POS extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'pOS';

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
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '120',
            'default' => null,
        ],
        'RelDruhU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTypU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTypCN' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Saldo' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Radek' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'RadekP' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'RadekZ' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'RadekZP' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Radek2' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Radek2Z' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Radek3' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Radek4' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Radek5' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Radek5P' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Radek6' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Radek6P' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Radek7' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Radek7P' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Korekce' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Minus' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'CistyObrat' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'UcelZnak' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'Pouzit' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ObratDPH' =>
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
        'NullCheck_Ucet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * pOS handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
