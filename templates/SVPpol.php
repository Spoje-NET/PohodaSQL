<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SVPpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SVPpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sVPpol';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Items' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'RelTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Delka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Definice' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelUL' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'OrderFld' =>
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
        'Use0' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Use1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Use2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Use3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Use4' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Use5' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
    ];

    /**
     * sVPpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
