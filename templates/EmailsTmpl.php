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
            'default' => null,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
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
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
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
