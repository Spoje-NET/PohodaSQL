<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SkParam
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SkParam extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SkParam';

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
            'size' => '32',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RelTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Delka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'MJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
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
     * SkParam handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
