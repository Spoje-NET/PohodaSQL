<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of GlxRidicSkup
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class GlxRidicSkup extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'GlxRidicSkup';

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
        'UsrOrder' =>
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
        'Skupina' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RelGlxSkupSaz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Proc1' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Proc2' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Proc3' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Sazba1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Sazba2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Sazba3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Zvyseni' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Kapesne' =>
        [
            'type' => 'float',
            'size' => '53',
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
        'NullCheck_Skupina' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * GlxRidicSkup handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
