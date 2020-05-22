<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of RpZAMpodkl
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class RpZAMpodkl extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'rpZAMpodkl';

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
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelOdpoc' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Pouzito' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelTpNez' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelUKoho' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcMes01' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes02' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes03' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes04' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes05' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes06' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes07' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes08' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes09' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes10' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes11' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcMes12' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
    ];

    /**
     * rpZAMpodkl handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
