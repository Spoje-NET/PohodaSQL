<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of EmailsSent
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class EmailsSent extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'EmailsSent';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'EmailFrom' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'EmailAddress' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'EmailAddressCC' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'EmailAddressBC' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Subject' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Attachments' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Priority' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ReturnReceipt' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DisposNotif' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'StatusInfo' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
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
    ];

    /**
     * EmailsSent handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
