<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzBuf
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzBuf extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzBuf';

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
        'StavZ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Rezer' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ObjedP' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ObjedV' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Reklam' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Servis' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'VNakup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Foul' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'NullCheck_RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * SKzBuf handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
