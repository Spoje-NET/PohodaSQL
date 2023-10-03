<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SCKurspol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SCKurspol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sCKurspol';

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
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'Zeme' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Mnozstvi' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'NBs' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
    ];

    /**
     * sCKurspol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
