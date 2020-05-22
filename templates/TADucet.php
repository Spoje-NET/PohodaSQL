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
    const STRUCTURE = [
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
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => NULL,
        ],
        'KodBanky' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'SpecSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '30',
            'default' => NULL,
        ],
        'Vychozi' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'BankaNazev' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'BankaUlice' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'BankaObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'BankaStat' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'TText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
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
