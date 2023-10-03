<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of MZzauct
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class MZzauct extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'MZzauct';

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
        'RelMes' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcDanUpZ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDanUpS' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Ponizovat' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
    ];

    /**
     * MZzauct handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
