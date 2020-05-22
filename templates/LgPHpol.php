<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of LgPHpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class LgPHpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'lgPHpol';

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
     * lgPHpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
