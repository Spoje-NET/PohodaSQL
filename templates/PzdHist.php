<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PzdHist
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PzdHist extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'PzdHist';

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
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelTpHist' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Sender' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Recip' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Status' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PackNum' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PackNumF' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Kolize' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Log' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
    ];

    /**
     * PzdHist handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
