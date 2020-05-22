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
            'default' => NULL,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatZac' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatKon' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelDrDov' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'HodPrac' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'KcZakVyp' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZakUpl' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KracVVZ' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'KcDenVZ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNaDen' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Oprava' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Sazba' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Kraceni' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
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
