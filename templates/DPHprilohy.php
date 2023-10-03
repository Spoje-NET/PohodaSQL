<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DPHprilohy
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DPHprilohy extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DPHprilohy';

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
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Cesta' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
    ];

    /**
     * DPHprilohy handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
