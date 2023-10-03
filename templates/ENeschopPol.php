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
            'default' => null,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Verze' =>
        [
            'type' => 'varchar',
            'size' => '6',
            'default' => null,
        ],
        'RelTpNotif' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IDNotifikace' =>
        [
            'type' => 'varchar',
            'size' => '38',
            'default' => null,
        ],
        'CisloRozhod' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'IdPripadu' =>
        [
            'type' => 'varchar',
            'size' => '38',
            'default' => null,
        ],
        'Zmena' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'PoznNotif' =>
        [
            'type' => 'varchar',
            'size' => '150',
            'default' => null,
        ],
        'DatVznikNotif' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'IsPlatny' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Prijmeni' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'DatNar' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'CizCisPojSP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'RelDruhZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KodDruhZ' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'NazevDruhZ' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'ICO' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'PracUraz' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JinaOs' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'AlkOmamn' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'NeschopOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'NeschopK' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'NeschopDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'JmenoLekare' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'NazevPzs' =>
        [
            'type' => 'varchar',
            'size' => '155',
            'default' => null,
        ],
        'UliceLekar' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'CPLekar' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'COLekar' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => null,
        ],
        'ObecLekar' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'PSCLekar' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'KodStatuLekar' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
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
