<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzOBJ
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzOBJ extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzOBJ';

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
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSkTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStruct' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'ObjKod' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'ObjNazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'NakupC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CmKurs' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'SDph' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'MJkoef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCin' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloZAK' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'Rezer' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Reklam' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ObjedP' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ObjedV' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Servis' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RefSKzNC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'User' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
    ];

    /**
     * SKzOBJ handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
