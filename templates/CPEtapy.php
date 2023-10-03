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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'CasOd' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'MistoOd' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'DatDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'CasDo' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'MistoDo' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'RelZpDpr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CasPocPr' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'CasKonPr' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'Km' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RelZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Prives' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
