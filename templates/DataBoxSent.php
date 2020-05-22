<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DataBoxSent
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DataBoxSent extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DataBoxSent';

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
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'SenderID' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'DataBoxID' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'MsgNote' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'MsgID' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Attachments' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'LegTitleLaw' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'LegTitleYear' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'LegTitleSect' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'LegTitlePar' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'LegTitlePoint' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RecipRefNo' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
        'RecipIdent' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
        'SenderRefNo' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
        'SenderIdent' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
        'ToHands' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Personal' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'StatusInfo' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'StatusDate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'StatusIsds' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DeliveryDate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Imported' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Official' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Dorucenka' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'JeDorucenka' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
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
    ];

    /**
     * DataBoxSent handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
