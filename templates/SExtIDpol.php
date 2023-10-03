<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SExtIDpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SExtIDpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sExtIDpol';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefDocID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefTable' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
    ];

    /**
     * sExtIDpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
