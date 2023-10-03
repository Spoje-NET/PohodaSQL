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
            'default' => null,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatSestav' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Tisice' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Data' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'NullCheck_RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
