<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of CPEtapy
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class CPEtapy extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'CPEtapy';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'CasOd' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'MistoOd' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'DatDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'CasDo' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'MistoDo' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'RelZpDpr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CasPocPr' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'CasKonPr' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'Km' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'RelZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Prives' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * CPEtapy handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
