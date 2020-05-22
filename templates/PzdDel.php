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
    const STRUCTURE = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SrcTable' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'RelSrcAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PzdAut' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PzdID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PzdStat' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
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
