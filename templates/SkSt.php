<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SkSt
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SkSt extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SkSt';

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
        'RefSklad' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Vetev1' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Vetev2' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Vetev3' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Vetev4' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Vetev5' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Vetev6' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Vetev7' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'RelNomIo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IoOdd' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'OnDynTab' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
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
    ];

    /**
     * SkSt handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
