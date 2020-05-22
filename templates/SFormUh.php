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
        'RelTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTypFM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'UseInAgOT' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'UseInAgPH' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'BPUhr' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'CmMnoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KurzAutomat' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KurzVcerejsi' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Hodnota' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ForEET' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
