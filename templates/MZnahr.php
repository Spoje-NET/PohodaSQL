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
        'RefZAMpDov' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatZac' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatKon' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'HodZac' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodKon' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DnyPrac' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DnyKal' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDrNahr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PrumActual' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcPrum' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcUpr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'HodNahr' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodNahr4' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Sazba3' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Sazba4' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Kraceni' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Rucne' =>
        [
            'type' => 'bit',
            'size' => null,
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
