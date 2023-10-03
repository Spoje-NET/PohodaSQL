<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of KasaHist
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class KasaHist extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'KasaHist';

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
        'RefSender' =>
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
        'RefRecip' =>
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
        'mKasaGUID' =>
        [
            'type' => 'varchar',
            'size' => '36',
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
     * KasaHist handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
