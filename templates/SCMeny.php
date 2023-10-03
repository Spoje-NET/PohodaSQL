<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SCMeny
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SCMeny extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sCMeny';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Pouzit' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Kod' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'IDS' =>
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
        'DenEUR' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DatDen' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KoefEUR' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'NullCheck_Kod' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * sCMeny handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
