<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SReklZpPredani
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SReklZpPredani extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sReklZpPredani';

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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
    ];

    /**
     * sReklZpPredani handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
