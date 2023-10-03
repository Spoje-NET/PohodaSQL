<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of Dotazy
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Dotazy extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'Dotazy';

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
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSubID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'UsrSel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'User' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Filter' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Sort' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'SortRef' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => null,
        ],
    ];

    /**
     * Dotazy handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
