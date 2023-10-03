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
            'default' => null,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Items' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Nazev' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'RelTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Delka' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Definice' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'RelUL' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'OrderFld' =>
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
        'Use0' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Use1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Use2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Use3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Use4' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Use5' =>
        [
            'type' => 'bit',
            'size' => null,
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
