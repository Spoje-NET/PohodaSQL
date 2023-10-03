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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'VypisPriUzav' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SlevyPrirazky' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ProdZapZas' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ProdZlomku' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'MnozZVahy' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'VratnyObal' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'HHour1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'HHour2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'HHour3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'HHour4' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'PopisPLU' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelMJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAkce' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDPT' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'OhranicCif' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'MoznostProd' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SpojPlu' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Cena' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Cena2' =>
        [
            'type' => 'int',
            'size' => '10',
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
