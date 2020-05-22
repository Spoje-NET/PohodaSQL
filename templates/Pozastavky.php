<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of Pozastavky
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Pozastavky extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'Pozastavky';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatSplat' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcLikv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Cm' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CmLikv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'DatLikv' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'RelPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpCalc' =>
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
    ];

    /**
     * Pozastavky handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
