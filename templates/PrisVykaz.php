<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PrisVykaz
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PrisVykaz extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'PrisVykaz';

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
        'Rok' =>
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
        'DatSestav' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatExport' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelTisice' =>
        [
            'type' => 'int',
            'size' => '10',
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
    ];

    /**
     * PrisVykaz handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
