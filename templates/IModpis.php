<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of IModpis
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class IModpis extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'IModpis';

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
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatumKHO' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelSkOdp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ZivotnNM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpOdp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Procento' =>
        [
            'type' => 'float',
            'size' => '53',
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
        'KcOdpisCalc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZvCeny' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVstup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVstupB' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZust' =>
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
    ];

    /**
     * IModpis handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
