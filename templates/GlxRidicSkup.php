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
    const STRUCTURE = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'UsrOrder' =>
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
        'Skupina' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'RelGlxSkupSaz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Proc1' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Proc2' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Proc3' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Sazba1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Sazba2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Sazba3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Zvyseni' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Kapesne' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
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
        'NullCheck_Skupina' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
