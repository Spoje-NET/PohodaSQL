<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of BPpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class BPpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'BPpol';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelAgH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelIDH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => NULL,
        ],
        'KodBanky' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'KonstSym' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => NULL,
        ],
        'SpecSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Cm' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'BpVrac' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelPoplTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefPoplUcet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PlatTitul' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'RefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Cizozemec' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'PrijNazev' =>
        [
            'type' => 'varchar',
            'size' => '70',
            'default' => NULL,
        ],
        'PrijUlice' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'PrijObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'PrijStat' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'BankaNazev' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'BankaUlice' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'BankaObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'BankaStat' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DuvodPlatby' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
    ];

    /**
     * BPpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
