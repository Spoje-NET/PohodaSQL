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
            'default' => null,
        ],
        'RefKasa' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefKasaMonitor' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Settings' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
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
