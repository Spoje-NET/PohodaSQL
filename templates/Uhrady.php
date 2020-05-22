<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of Uhrady
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Uhrady extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'Uhrady';

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
        'DatumU' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelAgH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelIDH' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CisloH' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'VarSymH' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'RelAgU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelIDU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefDD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CisloU' =>
        [
            'type' => 'varchar',
            'size' => '33',
            'default' => NULL,
        ],
        'KcU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CmH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CmU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcKRozd' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'BZavaz' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'UzKursu' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KcEET' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RelAgPrepl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelIDPrepl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcPrepl' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
    ];

    /**
     * Uhrady handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
