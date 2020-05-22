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
    const STRUCTURE = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'StavZ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Rezer' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ObjedP' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ObjedV' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Reklam' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Servis' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'VNakup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Foul' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'NullCheck_RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
