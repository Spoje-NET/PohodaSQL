<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SPlatidlaPol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SPlatidlaPol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sPlatidlaPol';

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
        'Hodnota' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Mince' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
    ];

    /**
     * sPlatidlaPol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
