<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPHObrat
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPHObrat extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPHObrat';

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
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zdroj' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'Datum1' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Datum2' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Datum3' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Datum4' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatumRef' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'SText1' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'SText2' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'KcMD' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcD' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcObrat' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'UcetSText' =>
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
     * DPHObrat handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
