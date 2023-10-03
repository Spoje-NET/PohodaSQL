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
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'VNC' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VNCr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VNCOcJ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'PNakup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'StavZ' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'User' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'UMD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'UD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'UMDUD' =>
        [
            'type' => 'varchar',
            'size' => '21',
            'default' => null,
        ],
        'UMDtxt' =>
        [
            'type' => 'varchar',
            'size' => '120',
            'default' => null,
        ],
        'UDtxt' =>
        [
            'type' => 'varchar',
            'size' => '120',
            'default' => null,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
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
