<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of IMuodpis
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class IMuodpis extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'IMuodpis';

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
        'Mesic' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RefIMO' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Zivotnost' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'KcVstup' =>
        [
            'type' => 'money',
            'size' => '19',
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
        'KcZustatek' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
    ];

    /**
     * IMuodpis handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
