<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of POSuSk
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class POSuSk extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'pOSuSk';

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
        'USk' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '120',
            'default' => NULL,
        ],
    ];

    /**
     * pOSuSk handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
