<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of Stwlock
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Stwlock extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'stwlock';

    /**
     * SQL Table structure
     * @const array
     */
    const STRUCTURE = [
        'id' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'rowid' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'tablename' =>
        [
            'type' => 'nvarchar',
            'size' => NULL,
            'default' => NULL,
        ],
        'spid' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'processid' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * stwlock handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
