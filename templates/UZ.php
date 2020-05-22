<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of UZ
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class UZ extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'UZ';

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
        'NIM0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'NIM1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'NIMU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'HIM0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'HIM1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'HIMU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'DDNMU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'DDHMU' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Ceniny0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Ceniny1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Zasoby0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Zasoby1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Pohled0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Pohled1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Penize0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Penize1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Ucty0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Ucty1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Akcie0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Akcie1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'FinMaj0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'FinMaj1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'OprAkt0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'OprAkt1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Zavazky0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Zavazky1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Rezervy0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Rezervy1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CasRoz0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'CasRoz1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'UveryPos0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'UveryPos1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Uvery0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Uvery1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'OprPas0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'OprPas1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'OstMaj0' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'OstMaj1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Mzdy' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
    ];

    /**
     * UZ handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
