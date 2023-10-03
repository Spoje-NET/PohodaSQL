<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PDB
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PDB extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'PDB';

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
        'RelStavEP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpPDB' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDruhPDB' =>
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
        'Uloha' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'ElOdeslano' =>
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
     * PDB handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
