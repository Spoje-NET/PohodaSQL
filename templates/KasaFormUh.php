<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of KasaFormUh
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class KasaFormUh extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'KasaFormUh';

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
        'RefKasa' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefFormUh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * KasaFormUh handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
