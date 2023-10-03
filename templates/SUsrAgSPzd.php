<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SUsrAgSPzd
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SUsrAgSPzd extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sUsrAgSPzd';

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
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpGrid' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSubID' =>
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
    ];

    /**
     * sUsrAgSPzd handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
