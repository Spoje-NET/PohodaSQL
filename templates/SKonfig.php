<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SKonfig
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SKonfig extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sKonfig';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelRokTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatRokOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatRokDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Prelom' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelUTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelOsTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PzdAut' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpPZD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'ObchDod' =>
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
        'Prijm' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Titul' =>
        [
            'type' => 'varchar',
            'size' => '7',
            'default' => null,
        ],
        'VztahP' =>
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
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Okres' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RefZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Firma2' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Ulice2' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Obec2' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'PSC2' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Klic' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'ICO' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'ICDPH' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'Tel' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'Fax' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'GSM' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'Email' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'WWW' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Registr' =>
        [
            'type' => 'varchar',
            'size' => '160',
            'default' => null,
        ],
        'PodporaBI' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'OfferForBackup' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Settings' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'LogoTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Logo' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'LogoBgnd' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Stamp' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * sKonfig handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
