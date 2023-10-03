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
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SenderID' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'DataBoxID' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'MsgNote' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'MsgID' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Attachments' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'LegTitleLaw' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'LegTitleYear' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'LegTitleSect' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'LegTitlePar' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'LegTitlePoint' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RecipRefNo' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'RecipIdent' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'SenderRefNo' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'SenderIdent' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'ToHands' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Personal' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'StatusInfo' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'StatusDate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'StatusIsds' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DeliveryDate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Imported' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Official' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Dorucenka' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'JeDorucenka' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
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
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
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
