<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ItsHmotn
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ItsHmotn extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ItsHmotn';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [
        'ItsKod' =>
        [
            'type' => 'varchar',
            'size' => '8',
            'default' => null,
        ],
        'DatOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * ItsHmotn handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
