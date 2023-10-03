<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of HWhist
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class HWhist extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'HWhist';

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
        'RelHwTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelEvTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Settings' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Stav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * HWhist handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
