<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SkCS
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SkCS extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SkCS';

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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'PrepSlv' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'PrepVCeny' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'PrepZPC' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'PrepNak' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ZmenSKNePrep' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelAfterMR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelCenyVyr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SDphNC' =>
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
        'DenEUR' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'CmMnoz' =>
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
        'Pozn' =>
        [
            'type' => 'text',
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
     * SkCS handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
