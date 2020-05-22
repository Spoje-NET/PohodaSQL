<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ZAMucet
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ZAMucet extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ZAMucet';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => NULL,
        ],
        'KodBanky' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'TypID' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'CP' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'Obec' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'Stat' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Active' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
    ];

    /**
     * ZAMucet handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
