<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of GlxsUcel
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class GlxsUcel extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'GlxsUcel';

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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
    ];

    /**
     * GlxsUcel handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
