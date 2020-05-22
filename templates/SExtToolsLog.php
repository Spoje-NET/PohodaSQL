<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SExtToolsLog
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SExtToolsLog extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sExtToolsLog';

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
        'Agenda' =>
        [
            'type' => 'varchar',
            'size' => '128',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Command' =>
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
        'RunUser' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
    ];

    /**
     * sExtToolsLog handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
