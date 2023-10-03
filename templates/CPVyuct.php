<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of CPVyuct
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class CPVyuct extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'CPVyuct';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcZaloha' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcStrav' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcStrDNU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVydaje' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNahr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNahDNU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSmeny' =>
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
        'RefCMKon' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CmKurs' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Smena' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'KcVyuct' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDopl' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZaokr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * CPVyuct handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
