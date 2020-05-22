<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ItsStatZ
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ItsStatZ extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ItsStatZ';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [
        'ItsKod' =>
        [
            'type' => 'varchar',
            'size' => '8',
            'default' => NULL,
        ],
        'DatOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
    ];

    /**
     * ItsStatZ handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
