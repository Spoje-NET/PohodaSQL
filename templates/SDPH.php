<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SDPH
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SDPH extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sDPH';

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
        'Vydaj' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'RefTpDph' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Popis' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Nabizet' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KodSH' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'RefKodyPredmPln' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'VymDphText' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'PlatneOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'PlatneDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Radky' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'RelVlivKHDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KodKHDPH' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * sDPH handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
