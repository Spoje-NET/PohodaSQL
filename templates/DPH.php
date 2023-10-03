<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPH
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPH extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPH';

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
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelObDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDrDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Podklady' =>
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
        'DatDuvod' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatOdevz' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcDan' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOdpoc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelKodRoku' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcZmena' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'UprKracOdp' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcKracOdp' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VypKoef' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Data' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'ElOdeslano' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
    ];

    /**
     * DPH handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
