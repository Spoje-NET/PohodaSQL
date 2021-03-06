<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of EmailsTmpl
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class EmailsTmpl extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'EmailsTmpl';

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
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
    ];

    /**
     * EmailsTmpl handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
