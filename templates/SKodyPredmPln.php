<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKodyPredmPln
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKodyPredmPln extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sKodyPredmPln';

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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '13',
            'default' => null,
        ],
        'MJ' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '255',
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * sKodyPredmPln handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
