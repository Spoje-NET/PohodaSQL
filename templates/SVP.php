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
        'RelVPTb' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'UsrAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'TabMain' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'TabItem' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Items' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Templates' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Documents' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'List' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ListIDS' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'ListSText' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'Code' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Settings' =>
        [
            'type' => 'image',
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
