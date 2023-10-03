<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of LgDJjizdypol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class LgDJjizdypol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'lgDJjizdypol';

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
        'RelZmTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TabID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Log' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * lgDJjizdypol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}