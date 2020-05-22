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
            'default' => NULL,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Kc' =>
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
        'RelZpVyr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpLik' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcLikv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcRucne' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Upraveno' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Uzavreno' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
