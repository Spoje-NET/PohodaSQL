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
            'default' => NULL,
        ],
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SPZ' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'Znacka' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'DatVyr' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelTypVoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelDrVoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelPHM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Spotr' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ProcPHM' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'TachPoc' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Objem' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Provoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Prives' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Ceny' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'NadrzPoc' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'DatZar' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatEvid' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelPoplatnik' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelOsvob' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSnizSazby' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Hmotnost' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'PocetNaprav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Elektromobil' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ElMobVykon' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
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
