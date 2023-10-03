<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of MZzivPoj
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class MZzivPoj extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'MZzivPoj';

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
        'RefZAMzivPoj' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcPoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'BezNaroku' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
    ];

    /**
     * MZzivPoj handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
