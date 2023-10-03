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
            'default' => null,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '128',
            'default' => null,
        ],
        'RefAgET' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Command' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Parameters' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Directory' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'PromtForParam' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Wait' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Hide' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KillTool' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
