<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of MZdavky
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class MZdavky extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'MZdavky';

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
        'DatZac' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatKon' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelDrDov' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'HodPrac' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'KcZakVyp' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZakUpl' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KracVVZ' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'KcDenVZ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNaDen' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Oprava' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Sazba' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Kraceni' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
    ];

    /**
     * MZdavky handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
