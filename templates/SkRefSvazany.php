<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SkRefSvazany
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SkRefSvazany extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SkRefSvazany';

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
        'Soubor' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => null,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
    ];

    /**
     * SkRefSvazany handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
