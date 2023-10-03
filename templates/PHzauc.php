<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of PHzauc
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PHzauc extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'PHzauc';

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
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefFormUh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAgIdZauc' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefUcet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SamostZauct' =>
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
        'UMD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'UD' =>
        [
            'type' => 'varchar',
            'size' => '9',
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
     * PHzauc handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
