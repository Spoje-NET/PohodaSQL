<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of QZavKcKRozd
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class QZavKcKRozd extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'qZavKcKRozd';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [
        'FAID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcKRozdCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
    ];

    /**
     * qZavKcKRozd handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
