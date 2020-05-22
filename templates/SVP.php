<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SVP
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SVP extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sVP';

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
        'RelVPTb' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'UsrAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'TabMain' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'TabItem' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Items' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Templates' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Documents' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'List' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ListIDS' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'ListSText' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'Code' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Settings' =>
        [
            'type' => 'image',
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
    ];

    /**
     * sVP handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
