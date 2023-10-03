<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SZAKplan
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SZAKplan extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sZAKplan';

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
        'RelDruhOper' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Zdroj' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Mnozstvi' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'MJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'MJKoef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * sZAKplan handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
