<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of MPhHist
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class MPhHist extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'MPhHist';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Usr' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Station' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Aplikace' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'SrcName' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'DstName' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
     * MPhHist handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
