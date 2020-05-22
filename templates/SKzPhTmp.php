<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzPhTmp
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzPhTmp extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzPhTmp';

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
        'PohID' =>
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
        'VNakup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcOceneni' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'StavZ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'RelOP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'User' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
    ];

    /**
     * SKzPhTmp handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
