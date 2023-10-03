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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ProcentoDPH' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KcDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcFc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelFcSzDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ProcentoDPH2' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KcFcDPH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelFcPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelFcTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcPoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelPojPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelPojTpDPH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcZaloha' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelZalPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelOZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
