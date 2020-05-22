<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ViesHist
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ViesHist extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ViesHist';

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
        'VatNumber' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RequestID' =>
        [
            'type' => 'varchar',
            'size' => '17',
            'default' => NULL,
        ],
        'Valid' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
    ];

    /**
     * ViesHist handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
