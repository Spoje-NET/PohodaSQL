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
            'default' => NULL,
        ],
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RefVOZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefRidic' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatumP' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Cas' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'CasP' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'Odkud' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Kam' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Pres' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Ucel' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Km' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Soukr' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Cerpano' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Misto' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Kc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Prives' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KcNahr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'ProcPHM' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Kcl' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KclVoz' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPHM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPausal' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcCelkem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcCelkZaokr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Pouzito' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Lock1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
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
