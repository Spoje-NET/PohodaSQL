<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SExtTools
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SExtTools extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sExtTools';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '128',
            'default' => NULL,
        ],
        'RefAgET' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Command' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Parameters' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Directory' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'PromtForParam' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Wait' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Hide' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KillTool' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * sExtTools handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
