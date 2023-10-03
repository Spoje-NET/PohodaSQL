<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of BP
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class BP extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'BP';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Polozky' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelTpBP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SEPA' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSplat' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatExport' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'Udaj' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'RefUcet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'EurCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KonstSym' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => null,
        ],
        'RequestID' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * BP handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
