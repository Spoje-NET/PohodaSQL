<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DJjizdy
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DJjizdy extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DJjizdy';

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
        'UsrOrder' =>
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
        'RefVOZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefRidic' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatumP' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Cas' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'CasP' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'Odkud' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Kam' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Pres' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Ucel' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Km' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Soukr' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Cerpano' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Misto' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Prives' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcNahr' =>
        [
            'type' => 'money',
            'size' => '19',
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
        'ProcPHM' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Kcl' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KclVoz' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPHM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPausal' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCelkZaokr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Pouzito' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Lock1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * DJjizdy handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
