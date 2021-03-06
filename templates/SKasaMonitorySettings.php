<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKasaMonitorySettings
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKasaMonitorySettings extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sKasaMonitorySettings';

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
        'RefKasa' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefKasaMonitor' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Settings' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
    ];

    /**
     * sKasaMonitorySettings handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
