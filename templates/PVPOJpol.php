<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PVPOJpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PVPOJpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'PVPOJpol';

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
        'RelTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Castka' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
    ];

    /**
     * PVPOJpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
