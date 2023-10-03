<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of Cert
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Cert extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'Cert';

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
        'CryptHash' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Data' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * Cert handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
