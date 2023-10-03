<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKzPol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKzPol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SKzPol';

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
        'RefSKz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Mnozstvi' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTypPol' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PrijemSZ' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'NevysklSZ' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'UpravaCen' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
    ];

    /**
     * SKzPol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
