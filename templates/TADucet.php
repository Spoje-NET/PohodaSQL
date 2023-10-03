<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TADucet
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TADucet extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tADucet';

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
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => null,
        ],
        'KodBanky' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'SpecSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '30',
            'default' => null,
        ],
        'Vychozi' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'BankaNazev' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'BankaUlice' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'BankaObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'BankaStat' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
    ];

    /**
     * tADucet handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
