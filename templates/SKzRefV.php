<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzRefV
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzRefV extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzRefV';

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
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'OrderFld' =>
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
        'User' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
    ];

    /**
     * SKzRefV handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
