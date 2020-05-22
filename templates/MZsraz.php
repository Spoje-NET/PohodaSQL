<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of MZsraz
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class MZsraz extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'MZsraz';

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
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefZpSra' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Poradi' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelMes' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Proc' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Kc' =>
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
        'Cela' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelPlat' =>
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
        'KonstSym' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => NULL,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '128',
            'default' => NULL,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Obec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '6',
            'default' => NULL,
        ],
        'RelFond' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelZivPj' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * MZsraz handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
