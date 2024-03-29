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
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatVznikNotif' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'CP' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'CO' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => null,
        ],
        'Obec' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'KodStatu' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Dodatek' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
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
