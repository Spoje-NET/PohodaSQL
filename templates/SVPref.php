<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SVPref
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SVPref extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sVPref';

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
        'RefPrm' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'AgOpen' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelUL' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * sVPref handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
