<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of NEMPRIprilohy
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class NEMPRIprilohy extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'NEMPRIprilohy';

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
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Cesta' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Komentar' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
    ];

    /**
     * NEMPRIprilohy handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
