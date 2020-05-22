<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of QsZakPoh018
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class QsZakPoh018 extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'qsZakPoh018';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [
        'RelID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefSkz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
    ];

    /**
     * qsZakPoh018 handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
