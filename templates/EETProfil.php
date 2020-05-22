<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of EETProfil
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class EETProfil extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'EETProfil';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Provozovna' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Zarizeni' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Settings' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'ZjednRezim' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Timeout' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PocetPokusu' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'NewDeniedByUser' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'AutoPrintOnSave' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RezimPover' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DICPover' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'RefPzdJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * EETProfil handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
