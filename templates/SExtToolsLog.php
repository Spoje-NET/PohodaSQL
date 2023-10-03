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
        'Agenda' =>
        [
            'type' => 'varchar',
            'size' => '128',
            'default' => null,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Command' =>
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
        'RunUser' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
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
