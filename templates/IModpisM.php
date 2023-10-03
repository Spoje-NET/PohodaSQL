<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of IModpisM
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class IModpisM extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'IModpisM';

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
        'RelUzavreno' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Mesic' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcOdpisM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOdpis' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcKorekce' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ZCelku' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KcOdpisCalc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZustatek' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVyrazeno' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
    ];

    /**
     * IModpisM handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
