<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzCnPol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzCnPol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzCnPol';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefSkCeny' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ProdejC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelTpFix' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Marze' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Rabat' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Sleva' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
    ];

    /**
     * SKzCnPol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
