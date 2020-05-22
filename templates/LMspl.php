<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of LMspl
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class LMspl extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'LMspl';

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
        'Datum' =>
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
        'RelSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ProcentoDPH' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'KcDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RelPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcFc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RelFcSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ProcentoDPH2' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'KcFcDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RelFcPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelFcTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcPoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RelPojPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelPojTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcZaloha' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RelZalPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelOZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * LMspl handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
