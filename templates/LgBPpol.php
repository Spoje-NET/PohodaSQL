<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of LgBPpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class LgBPpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'lgBPpol';

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
        'RelZmTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'TabID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Log' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
    ];

    /**
     * lgBPpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
