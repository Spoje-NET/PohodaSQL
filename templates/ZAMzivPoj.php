<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ZAMzivPoj
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ZAMzivPoj extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ZAMzivPoj';

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
        'RefPoj' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcPoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'SpecSym' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'BezNaroku' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
    ];

    /**
     * ZAMzivPoj handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
