<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of KasaEETProfil
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class KasaEETProfil extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'KasaEETProfil';

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
        'RefKasa' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefEETProfil' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * KasaEETProfil handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
