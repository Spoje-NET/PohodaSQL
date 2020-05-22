<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DOC
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DOC extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DOC';

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
        'RelAgID' =>
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
        'RelID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Path' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RefElArchivID' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
        'DatArchiv' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
    ];

    /**
     * DOC handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
