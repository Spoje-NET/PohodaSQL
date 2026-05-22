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
 * Shipment line item (Položka zásilky).
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ZasilkaPol extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'ZasilkyPol';

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
        'Sel' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefAg' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'OrderFld' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Cislo' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RelStavOz' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'StavOz' => [
            'type' => 'varchar',
            'size' => '200',
            'default' => null,
        ],
        'RelTermDoruc' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSluzbaNakl' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSluzbaVykl' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelForUhOz' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Druh' => [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'Sluzby' => [
            'type' => 'varchar',
            'size' => '80',
            'default' => null,
        ],
        'DruhObalu' => [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'Cena' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Dobirka' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RefCM' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'VarSym' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'VarSymPk' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Hmotnost' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RefUcet' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ParovaciIDS' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Obsah' => [
            'type' => 'varchar',
            'size' => '80',
            'default' => null,
        ],
        'PodavatelID' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'DruhSK' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ZpusobUhrady' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Trida' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Pojisteni' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Postovne' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'PocetKusu' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DobaUlozeni' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DruhPPP' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Obal' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ObsahSK' => [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'JmenoZpet' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'UliceZpet' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'ObecZpet' => [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'PSCZpet' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'RelTypDoruceni' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PobockaID' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'VydejMistoDop' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Odesilatel' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'VelikostX' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'VelikostY' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'VelikostZ' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Objem' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Pozn' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'DatCreate' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * ZasilkyPol handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, array $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
