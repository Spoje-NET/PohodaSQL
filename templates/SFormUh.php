<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SFormUh
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SFormUh extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sFormUh';

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
        'RelTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTypFM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'UseInAgOT' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'UseInAgPH' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'BPUhr' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'CmMnoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KurzAutomat' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KurzVcerejsi' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Hodnota' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ForEET' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * sFormUh handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
