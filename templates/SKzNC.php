<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzNC
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzNC extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzNC';

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
        'DefDod' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefAg' =>
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
        'EAN' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'PrintEAN' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'MJEAN' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'MJkoefEAN' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DobaDod' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDbDod' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'MinMnoz' =>
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
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
    ];

    /**
     * SKzNC handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
