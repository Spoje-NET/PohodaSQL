<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ZAMpDovZapoc
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ZAMpDovZapoc extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ZAMpDovZapoc';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatZac' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatKon' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DnyPrac' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DnyKal' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Dnu' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'RelDrDov' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Diagnoza' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'VypMMRR' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'ZacPrac' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'RelZacJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KonPrac' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'RelKonJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelNavaz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefNavaz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Sazba' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'CanHZUPN' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefENeschop' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatZacRO' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatKonRO' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatPorod' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
    ];

    /**
     * ZAMpDovZapoc handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
