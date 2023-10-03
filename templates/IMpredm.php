<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of IMpredm
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class IMpredm extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'IMpredm';

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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Kc' =>
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
        'RelZpVyr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpLik' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcLikv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcRucne' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Upraveno' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Uzavreno' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * IMpredm handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
