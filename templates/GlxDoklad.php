<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of GlxDoklad
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class GlxDoklad extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'GlxDoklad';

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
        'RefCP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'UcZal' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'UcNahr' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'Polozka' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
    ];

    /**
     * GlxDoklad handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
