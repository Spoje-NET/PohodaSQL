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
    const STRUCTURE = [
        'ID' =>
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
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefFormUh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelAgIdZauc' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefUcet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SamostZauct' =>
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
        'UMD' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'UD' =>
        [
            'type' => 'varchar',
            'size' => '9',
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
