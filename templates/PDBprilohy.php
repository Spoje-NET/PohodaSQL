<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PDBprilohy
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PDBprilohy extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'PDBprilohy';

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
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Cesta' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
    ];

    /**
     * PDBprilohy handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
