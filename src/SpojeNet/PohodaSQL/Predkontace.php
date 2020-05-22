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
        'RelPkAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '19',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'UMD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'UD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'SText2' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'UMD2' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'UD2' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'SText1' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'UMD1' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'UD1' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'SText3' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'UMD3' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'UD3' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'Bez' =>
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
