<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SkEURO
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SkEURO extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'SkEURO';

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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'VypisPriUzav' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SlevyPrirazky' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ProdZapZas' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ProdZlomku' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'MnozZVahy' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'VratnyObal' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'HHour1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'HHour2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'HHour3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'HHour4' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'PopisPLU' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelMJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelAkce' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelDPT' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'OhranicCif' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'MoznostProd' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SpojPlu' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Cena' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Cena2' =>
        [
            'type' => 'int',
            'size' => '10',
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * SkEURO handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
