<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PrisVykazy
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PrisVykazy extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'PrisVykazy';

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
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatSestav' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Tisice' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Data' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'NullCheck_RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * PrisVykazy handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
