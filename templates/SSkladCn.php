<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SSkladCn
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SSkladCn extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sSkladCn';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefSkSkup' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Pouzit' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
    ];

    /**
     * sSkladCn handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
