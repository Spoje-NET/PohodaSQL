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
        'RelAgH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelIDH' =>
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
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => null,
        ],
        'KodBanky' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'KonstSym' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => null,
        ],
        'SpecSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Cm' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'BpVrac' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelPoplTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPoplUcet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PlatTitul' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'RefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Cizozemec' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'PrijNazev' =>
        [
            'type' => 'varchar',
            'size' => '70',
            'default' => null,
        ],
        'PrijUlice' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'PrijObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'PrijStat' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'BankaNazev' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'BankaUlice' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'BankaObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'BankaStat' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DuvodPlatby' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
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
