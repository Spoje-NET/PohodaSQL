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
        'RelRozTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RadekOld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Radek' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcHaler' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcTisic' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcHaler2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcTisic2' =>
        [
            'type' => 'money',
            'size' => '19',
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
