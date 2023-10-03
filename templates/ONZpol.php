<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ONZpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ONZpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ONZpol';

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
        'RefZam' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Prijmeni' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Rozena' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'PrijmeniDalsi' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Titul' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'RelPohl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'DatNar' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'MistoNar' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'StatPris' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'RelTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PlatneOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'PojisteniOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatVstup' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatOdch' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DDrDuch' =>
        [
            'type' => 'varchar',
            'size' => '25',
            'default' => null,
        ],
        'DatDuchodOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'OSSZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PojKod' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => null,
        ],
        'DruhZ' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'SmlSpNosPoj' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'SoucPoj' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'PredPoj' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'JeMR' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'CP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Obec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'Posta' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'Stat' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'KonUlice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'KonCP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'KonPSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'KonObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'StatKonAdr' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'CizUlice' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'CizCP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'CizPSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'CizObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'CizMisto' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'CizNositel' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'CizUlice2' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'CizCP2' =>
        [
            'type' => 'varchar',
            'size' => '8',
            'default' => null,
        ],
        'CizPostCode' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'CizObec2' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'CizStat' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'CizCislo' =>
        [
            'type' => 'varchar',
            'size' => '25',
            'default' => null,
        ],
        'ZmenaAdr' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
    ];

    /**
     * ONZpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
