<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPHEVDpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPHEVDpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPHEVDpol';

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
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefIDsrc' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPolSrc' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'DatZdPln' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'RefKodyPredmPln' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
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
        'RozsahPln' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'MJpln' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
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
     * DPHEVDpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
