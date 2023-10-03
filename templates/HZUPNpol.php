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
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefNeprit' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStavDP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PoradCis' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RokMZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'MesicMZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloPotvrzeni' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'KodOSSZ' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'NazevOSSZ' =>
        [
            'type' => 'varchar',
            'size' => '30',
            'default' => null,
        ],
        'DatumVystaveni' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'OpravnePodani' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Prijmeni' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Titul' =>
        [
            'type' => 'varchar',
            'size' => '60',
            'default' => null,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'DatNar' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'JmZam' =>
        [
            'type' => 'varchar',
            'size' => '144',
            'default' => null,
        ],
        'ICZam' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'VSZam' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'NavratDoPrace' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DuvodNavratuDoPrace' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => null,
        ],
        'DatumNavratuDoPrace' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'PocetOdpracHodinPoslDenPD' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'PracovniDobaPoslDenPD' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DuvodPisemnehoVystaveni' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => null,
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
