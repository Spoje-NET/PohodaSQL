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
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefZpSra' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Poradi' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelMes' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Proc' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Kc' =>
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
        'Cela' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelPk' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelPlat' =>
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
        'KonstSym' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => null,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '128',
            'default' => null,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Obec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '6',
            'default' => null,
        ],
        'RelFond' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZivPj' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
