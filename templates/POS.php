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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '120',
            'default' => NULL,
        ],
        'RelDruhU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTypU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTypCN' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Saldo' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Radek' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'RadekP' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'RadekZ' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'RadekZP' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Radek2' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Radek2Z' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Radek3' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Radek4' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Radek5' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Radek5P' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Radek6' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Radek6P' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Radek7' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Radek7P' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Korekce' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Minus' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'CistyObrat' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'UcelZnak' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'Pouzit' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ObratDPH' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'NullCheck_Ucet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
