<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SUsrAgS
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SUsrAgS extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sUsrAgS';

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
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpGrid' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelSubID' =>
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
    ];

    /**
     * sUsrAgS handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
