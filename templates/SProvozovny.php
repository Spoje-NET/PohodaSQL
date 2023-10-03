<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SProvozovny
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SProvozovny extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sProvozovny';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
            'size' => '255',
            'default' => null,
        ],
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Obec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'Tel' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'GSM' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'Fax' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'Email' =>
        [
            'type' => 'varchar',
            'size' => '98',
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
        'Pozn' =>
        [
            'type' => 'text',
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
     * sProvozovny handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
