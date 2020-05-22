<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SBI
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SBI extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sBI';

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
        'sTable' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'sColumn' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'lID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'sName' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'lValue' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'sValue' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'lAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * sBI handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
