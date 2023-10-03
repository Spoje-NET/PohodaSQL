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
        'CisloRozhod' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'RefZam' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelStavENes' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
        'ICO' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '10',
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
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '38',
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
        'NullCheck_CisloRozhod' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
