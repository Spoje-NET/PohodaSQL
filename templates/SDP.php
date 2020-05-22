<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SDP
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SDP extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sDP';

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
        'IdDP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'Vypocet' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'Pausal' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Paragraf' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'RokOd' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
        'RokDo' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => NULL,
        ],
    ];

    /**
     * sDP handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
