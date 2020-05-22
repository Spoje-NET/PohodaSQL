<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ENeschopPol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ENeschopPol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ENeschopPol';

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
        'Verze' =>
        [
            'type' => 'varchar',
            'size' => '6',
            'default' => NULL,
        ],
        'RelTpNotif' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IDNotifikace' =>
        [
            'type' => 'varchar',
            'size' => '38',
            'default' => NULL,
        ],
        'CisloRozhod' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'IdPripadu' =>
        [
            'type' => 'varchar',
            'size' => '38',
            'default' => NULL,
        ],
        'Zmena' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'PoznNotif' =>
        [
            'type' => 'varchar',
            'size' => '150',
            'default' => NULL,
        ],
        'DatVznikNotif' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'IsPlatny' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'Prijmeni' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'DatNar' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'CizCisPojSP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'RelDruhZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KodDruhZ' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => NULL,
        ],
        'NazevDruhZ' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'ICO' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'PracUraz' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JinaOs' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'AlkOmamn' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'NeschopOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'NeschopK' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'NeschopDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'JmenoLekare' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'NazevPzs' =>
        [
            'type' => 'varchar',
            'size' => '155',
            'default' => NULL,
        ],
        'UliceLekar' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'CPLekar' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'COLekar' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => NULL,
        ],
        'ObecLekar' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'PSCLekar' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'KodStatuLekar' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
    ];

    /**
     * ENeschopPol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
