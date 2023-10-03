<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PVPOJ
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PVPOJ extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'PVPOJ';

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
        'RelStavDP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTypEP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPuvodni' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelMesic' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatPod' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatPrij' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '128',
            'default' => null,
        ],
        'Uloha' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RespPoint' =>
        [
            'type' => 'varchar',
            'size' => '255',
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
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * PVPOJ handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
