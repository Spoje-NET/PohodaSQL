<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of MZnahr
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class MZnahr extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'MZnahr';

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
        'RefZAMpDov' =>
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
        'HodZac' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodKon' =>
        [
            'type' => 'real',
            'size' => '24',
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
        'RelDrNahr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PrumActual' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KcPrum' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcUpr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'HodNahr' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodNahr4' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Sazba3' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Sazba4' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Kraceni' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Rucne' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
    ];

    /**
     * MZnahr handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
