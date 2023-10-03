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
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Provozovna' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zarizeni' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Settings' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'ZjednRezim' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Timeout' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PocetPokusu' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'NewDeniedByUser' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'AutoPrintOnSave' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RezimPover' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DICPover' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'RefPzdJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
