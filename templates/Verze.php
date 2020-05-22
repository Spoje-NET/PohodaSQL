<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of Verze
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Verze extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'Verze';

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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => NULL,
        ],
        'TypeDB' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Verze' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'VerzeKasa' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'VerzeGLX' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'VerzeMzdy' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'LC' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Release' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Nser' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
    ];

    /**
     * Verze handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
