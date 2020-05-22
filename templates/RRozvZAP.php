<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of RRozvZAP
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class RRozvZAP extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'rRozvZAP';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'AP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'A' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'P' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * rRozvZAP handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
