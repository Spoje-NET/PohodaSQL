<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SkKat
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SkKat extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SkKat';

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
            'size' => '48',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'SupNodeIDS' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'RefNodeID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Pozice' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Poradi' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zobraz' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Obrazek' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => null,
        ],
        'FullTreeNode' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Node' =>
        [
            'type' => 'int',
            'size' => '10',
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
    ];

    /**
     * SkKat handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
