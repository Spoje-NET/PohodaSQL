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
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelOdpoc' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Pouzito' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelTpNez' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelUKoho' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcMes01' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes02' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes03' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes04' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes05' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes06' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes07' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes08' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes09' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes10' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes11' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcMes12' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
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
