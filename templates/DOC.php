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
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSubID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Path' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RefElArchivID' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'DatArchiv' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
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
