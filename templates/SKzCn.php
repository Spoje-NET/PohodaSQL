<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzCn
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzCn extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzCn';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefSkCeny' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ProdejC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RelTpFix' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Marze' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Rabat' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Sleva' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
    ];

    /**
     * SKzCn handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
