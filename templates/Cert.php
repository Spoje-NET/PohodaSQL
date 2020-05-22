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
    const STRUCTURE = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CryptHash' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Data' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
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
