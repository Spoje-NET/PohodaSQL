<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzInvZc
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzInvZc extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzInvZc';

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
        'RelSkDruh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZcTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Manko' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'AUcet' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
    ];

    /**
     * SKzInvZc handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
