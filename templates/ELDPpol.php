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
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TypELDP' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
            'size' => '64',
            'default' => null,
        ],
        'Titul' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
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
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Stat' =>
        [
            'type' => 'varchar',
            'size' => '2',
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
        'Rozena' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'MistoNar' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'DatOpr' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RefZAMpomer1' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Kod1' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'MR1' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'DatOd1' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDo1' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Dny1' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Mes1R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes2R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes3R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes4R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes5R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes6R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes7R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes8R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes9R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes10R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes11R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes12R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes1_12R1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'VylDoby1' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'VymZakl1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'DobyOdec1' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefZAMpomer2' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Kod2' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'MR2' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'DatOd2' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDo2' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Dny2' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Mes1R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes2R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes3R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes4R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes5R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes6R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes7R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes8R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes9R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes10R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes11R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes12R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes1_12R2' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'VylDoby2' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'VymZakl2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'DobyOdec2' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefZAMpomer3' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Kod3' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'MR3' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'DatOd3' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDo3' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Dny3' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Mes1R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes2R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes3R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes4R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes5R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes6R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes7R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes8R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes9R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes10R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes11R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes12R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mes1_12R3' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'VylDoby3' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'VymZakl3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'DobyOdec3' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Druh1' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'DatOdD1' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDoD1' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Druh2' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'DatOdD2' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDoD2' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatOdVCO' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RefStavDP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Err' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
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
