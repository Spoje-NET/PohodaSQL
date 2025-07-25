<?php

declare(strict_types=1);

/**
 * This file is part of the PohodaSQL package
 *
 * https://github.com/Spoje-NET/PohodaSQL
 *
 * (c) Spoje.Net <https://spoje.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of DOC.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class DOC extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'DOC';
    public ?string $createColumn = 'Datum';

    /**
     * SQL Table structure.
     *
     * @const array
     */
    public array $struct = [
        'ID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAgID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSubID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Path' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RefElArchivID' => [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'DatArchiv' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * DOC handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }

    /**
     * Add Link attachment.
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

    public function fileAttachment(): void
    {
    }

    public function getAttachments(): void
    {
        // SELECT DOC.ID, DOC.RelDocType, DOC.RelAgID, DOC.Name, DOC.Path, DOC.Url, DOC.Datum , DOC.RefElArchivID FROM DOC WHERE (RelAgID = 28) AND (RelID = 303)
    }
}
