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
    const STRUCTURE = [
        'ID' =>
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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'SupNodeIDS' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'RefNodeID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Pozice' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Poradi' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Zobraz' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Obrazek' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => NULL,
        ],
        'FullTreeNode' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Node' =>
        [
            'type' => 'int',
            'size' => '10',
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
