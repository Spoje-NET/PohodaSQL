<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ENeschopPobyt
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ENeschopPobyt extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ENeschopPobyt';

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
        'DatVznikNotif' =>
        [
            'type' => 'datetime',
            'size' => NULL,
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
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'CP' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'CO' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => NULL,
        ],
        'Obec' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'KodStatu' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Dodatek' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
    ];

    /**
     * ENeschopPobyt handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
