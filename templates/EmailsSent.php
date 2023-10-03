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
            'default' => null,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'EmailFrom' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'EmailAddress' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'EmailAddressCC' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'EmailAddressBC' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Subject' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Attachments' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Priority' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ReturnReceipt' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DisposNotif' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'StatusInfo' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
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
