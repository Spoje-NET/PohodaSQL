<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzVNTmp
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzVNTmp extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzVNTmp';

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
        'VNC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VNCr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VNCOcJ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'PNakup' =>
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
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'User' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'UMD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'UD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'UMDUD' =>
        [
            'type' => 'varchar',
            'size' => '21',
            'default' => NULL,
        ],
        'UMDtxt' =>
        [
            'type' => 'varchar',
            'size' => '120',
            'default' => NULL,
        ],
        'UDtxt' =>
        [
            'type' => 'varchar',
            'size' => '120',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
    ];

    /**
     * SKzVNTmp handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
