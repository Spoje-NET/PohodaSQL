<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of HZUPNpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class HZUPNpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'HZUPNpol';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefNeprit' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefStavDP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PoradCis' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RokMZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'MesicMZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CisloPotvrzeni' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'KodOSSZ' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'NazevOSSZ' =>
        [
            'type' => 'varchar',
            'size' => '30',
            'default' => NULL,
        ],
        'DatumVystaveni' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'OpravnePodani' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'Prijmeni' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'Titul' =>
        [
            'type' => 'varchar',
            'size' => '60',
            'default' => NULL,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'DatNar' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'JmZam' =>
        [
            'type' => 'varchar',
            'size' => '144',
            'default' => NULL,
        ],
        'ICZam' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'VSZam' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'NavratDoPrace' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DuvodNavratuDoPrace' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => NULL,
        ],
        'DatumNavratuDoPrace' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'PocetOdpracHodinPoslDenPD' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'PracovniDobaPoslDenPD' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DuvodPisemnehoVystaveni' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => NULL,
        ],
    ];

    /**
     * HZUPNpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
