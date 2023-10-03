<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DJvoz
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DJvoz extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DJvoz';

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
        'SPZ' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'Znacka' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'DatVyr' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelTypVoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDrVoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelPHM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Spotr' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ProcPHM' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'TachPoc' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Objem' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Provoz' =>
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
        'Ceny' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'NadrzPoc' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DatZar' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatEvid' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelPoplatnik' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelOsvob' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSnizSazby' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Hmotnost' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'PocetNaprav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Elektromobil' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ElMobVykon' =>
        [
            'type' => 'float',
            'size' => '53',
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
     * DJvoz handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
