<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SSklad
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SSklad extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sSklad';

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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RefUsr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPzdJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'AUcetM' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'AUcetZ' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'AUcetV' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'AUcetNV' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'AUcetP' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'AUcetZV' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'AUcetVVM' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => null,
        ],
        'SynchDleSk' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SynchSk' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SynchNew' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'OmezSkladPLU' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DolniMezPLU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'HorniMezPLU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Reklam' =>
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
        'mPhSynchSk' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * sSklad handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
