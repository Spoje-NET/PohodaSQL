<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PRozv
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PRozv extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'pRozv';

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
        'RelRozTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RadekOld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Radek' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcHaler' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcTisic' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcHaler2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcTisic2' =>
        [
            'type' => 'money',
            'size' => '19',
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
    ];

    /**
     * pRozv handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
