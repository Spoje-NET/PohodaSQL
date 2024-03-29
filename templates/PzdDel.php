<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PzdDel
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PzdDel extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'PzdDel';

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
        'SrcTable' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'RelSrcAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PzdAut' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PzdID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PzdStat' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
    ];

    /**
     * PzdDel handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
