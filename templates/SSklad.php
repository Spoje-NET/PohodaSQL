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
    const STRUCTURE = [
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
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'RefUsr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefPzdJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'AUcetM' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'AUcetZ' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'AUcetV' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'AUcetNV' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'AUcetP' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'AUcetZV' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'AUcetVVM' =>
        [
            'type' => 'varchar',
            'size' => '9',
            'default' => NULL,
        ],
        'SynchDleSk' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SynchSk' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SynchNew' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'OmezSkladPLU' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DolniMezPLU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'HorniMezPLU' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Reklam' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'mPhSynchSk' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'NullCheck_IDS' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
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
