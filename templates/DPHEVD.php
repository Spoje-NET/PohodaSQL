<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPHEVD
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPHEVD extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPHEVD';

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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelObEvd' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTypDPHEVD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDruh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Kc0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ElOdeslano' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => null,
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
     * DPHEVD handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
