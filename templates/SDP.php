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
            'default' => null,
        ],
        'IdDP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Vypocet' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'Pausal' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Paragraf' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'RokOd' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'RokDo' =>
        [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
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
