<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ENeschop
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ENeschop extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ENeschop';

    /**
     * SQL Table structure
     * @const array
     */
    const STRUCTURE = [
        'ID' =>
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
        'CisloRozhod' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'RefZam' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelStavENes' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
        'ICO' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '10',
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
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '38',
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
        'NullCheck_CisloRozhod' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * ENeschop handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
