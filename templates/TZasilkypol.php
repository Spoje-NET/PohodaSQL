<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of TZasilkypol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class TZasilkypol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'tZasilkypol';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'OrderFld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'RelStavOz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'StavOz' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => NULL,
        ],
        'RelForUhOz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Druh' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'Sluzby' =>
        [
            'type' => 'varchar',
            'size' => '80',
            'default' => NULL,
        ],
        'Cena' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Dobirka' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RefCM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'VarSymPk' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Hmotnost' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'RefUcet' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ParovaciIDS' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Obsah' =>
        [
            'type' => 'varchar',
            'size' => '80',
            'default' => NULL,
        ],
        'PodavatelID' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'DruhSK' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ZpusobUhrady' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Trida' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Pojisteni' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Postovne' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'PocetKusu' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DobaUlozeni' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DruhPPP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Obal' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ObsahSK' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'JmenoZpet' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'UliceZpet' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'ObecZpet' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'PSCZpet' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'RelTypDoruceni' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PobockaID' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'Odesilatel' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'VelikostX' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'VelikostY' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'VelikostZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
    ];

    /**
     * tZasilkypol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
