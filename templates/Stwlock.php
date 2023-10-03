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
    public $struct = [
        'id' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'rowid' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'tablename' =>
        [
            'type' => 'nvarchar',
            'size' => null,
            'default' => null,
        ],
        'spid' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'processid' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
