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
        'RefZam' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Prijmeni' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Rozena' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'PrijmeniDalsi' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'Titul' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'RelPohl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'DatNar' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'MistoNar' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'StatPris' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'RelTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PlatneOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'PojisteniOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatVstup' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatOdch' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DDrDuch' =>
        [
            'type' => 'varchar',
            'size' => '25',
            'default' => NULL,
        ],
        'DatDuchodOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'OSSZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PojKod' =>
        [
            'type' => 'varchar',
            'size' => '4',
            'default' => NULL,
        ],
        'DruhZ' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'SmlSpNosPoj' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'SoucPoj' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'PredPoj' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'JeMR' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Ulice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'CP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'Obec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'Posta' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'Stat' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'KonUlice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'KonCP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'KonPSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'KonObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'StatKonAdr' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'CizUlice' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'CizCP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'CizPSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'CizObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'CizMisto' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'CizNositel' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'CizUlice2' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'CizCP2' =>
        [
            'type' => 'varchar',
            'size' => '8',
            'default' => NULL,
        ],
        'CizPostCode' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'CizObec2' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'CizStat' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'CizCislo' =>
        [
            'type' => 'varchar',
            'size' => '25',
            'default' => NULL,
        ],
        'ZmenaAdr' =>
        [
            'type' => 'bit',
            'size' => NULL,
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
