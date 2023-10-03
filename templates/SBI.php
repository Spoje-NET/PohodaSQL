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
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'sTable' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'sColumn' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'lID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'sName' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'lValue' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'sValue' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'lAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
