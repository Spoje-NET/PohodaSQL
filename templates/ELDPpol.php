<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ELDPpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ELDPpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ELDPpol';

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
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'TypELDP' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
            'size' => '64',
            'default' => NULL,
        ],
        'Titul' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
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
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'Stat' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
        'Rozena' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'MistoNar' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => NULL,
        ],
        'DatOpr' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RefZAMpomer1' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Kod1' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'MR1' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'DatOd1' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatDo1' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Dny1' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Mes1R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes2R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes3R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes4R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes5R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes6R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes7R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes8R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes9R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes10R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes11R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes12R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes1_12R1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'VylDoby1' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'VymZakl1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'DobyOdec1' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefZAMpomer2' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Kod2' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'MR2' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'DatOd2' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatDo2' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Dny2' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Mes1R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes2R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes3R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes4R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes5R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes6R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes7R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes8R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes9R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes10R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes11R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes12R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes1_12R2' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'VylDoby2' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'VymZakl2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'DobyOdec2' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefZAMpomer3' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Kod3' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'MR3' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'DatOd3' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatDo3' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Dny3' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Mes1R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes2R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes3R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes4R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes5R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes6R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes7R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes8R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes9R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes10R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes11R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes12R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Mes1_12R3' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'VylDoby3' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'VymZakl3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'DobyOdec3' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Druh1' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'DatOdD1' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatDoD1' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Druh2' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'DatOdD2' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatDoD2' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatOdVCO' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RefStavDP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Err' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
    ];

    /**
     * ELDPpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
