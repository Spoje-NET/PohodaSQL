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
    const STRUCTURE = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSkTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefStruct' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefAD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'ObjKod' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'ObjNazev' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => NULL,
        ],
        'NakupC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CmKurs' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'SDph' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mnozstvi' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'MJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'MJkoef' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefCin' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CisloZAK' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'Rezer' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Reklam' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ObjedP' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ObjedV' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Servis' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'RefSKzNC' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'User' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
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
