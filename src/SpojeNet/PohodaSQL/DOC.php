<?php

/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020-2024 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DOC
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DOC extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'DOC';

    /**
     *
     * @var string
     */
    public $createColumn = 'Datum';

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
        'RelAgID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSubID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Path' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RefElArchivID' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'DatArchiv' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * DOC handler
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }

    /**
     * Add Link attachment
     *
     * @param int    $docId
     * @param string $url
     * @param string $name
     *
     * @return int
     */
    public function urlAttachment(int $docId, string $url, string $name = '')
    {
        $data = [
            'RelDocType' => 3,
            'RelAgID' => $this->getDataValue('RelAgID'),
            'RelSubID' => null,
            'RelID' => $docId,
            'Name' => empty($name) ? $url : $name,
            'Path' => null,
            'RefElArchivID' => null,
            'Url' => $url,
        ];
        return $this->insertToSQL($data);
    }

    public function fileAttachment()
    {
    }

    public function getAttachments()
    {
        //SELECT DOC.ID, DOC.RelDocType, DOC.RelAgID, DOC.Name, DOC.Path, DOC.Url, DOC.Datum , DOC.RefElArchivID FROM DOC WHERE (RelAgID = 28) AND (RelID = 303)
    }
}
