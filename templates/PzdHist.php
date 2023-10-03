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
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelTpHist' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sender' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Recip' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Status' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PackNum' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PackNumF' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Kolize' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Log' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
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
