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
        'RelUzavreno' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatumKHO' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelSkOdp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ZivotnNM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpOdp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Procento' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'KcOdpis' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcKorekce' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcOdpisCalc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZvCeny' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcVstup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcVstupB' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZust' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ZCelku' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
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
