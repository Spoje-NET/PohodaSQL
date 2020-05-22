<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DotazyPzd
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DotazyPzd extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DotazyPzd';

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
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSubID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'UsrSel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'User' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Filter' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Sort' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'SortRef' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => NULL,
        ],
    ];

    /**
     * DotazyPzd handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
