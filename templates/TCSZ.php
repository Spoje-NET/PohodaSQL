<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TCSZ
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TCSZ extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tCSZ';

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
        'RefGroup' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelCSZAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'OrdFldIDR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpHO' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefAg' =>
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
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
    ];

    /**
     * tCSZ handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
