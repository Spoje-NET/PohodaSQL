<?php

/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PPK
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Predkontace extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'pPK';

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
        'RelPkAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '19',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'UMD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'UD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'SText2' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'UMD2' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'UD2' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'SText1' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'UMD1' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'UD1' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'SText3' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'UMD3' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'UD3' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'Bez' =>
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
    ];

    /**
     * pPK handler
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
