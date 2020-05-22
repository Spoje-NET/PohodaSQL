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
        'RelHwTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelEvTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Settings' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Stav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
