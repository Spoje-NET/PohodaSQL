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
    const STRUCTURE = [
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
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelRokTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatRokOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatRokDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Prelom' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelUTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelOsTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PzdAut' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpPZD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Firma' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'ObchDod' =>
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
        'Prijm' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Titul' =>
        [
            'type' => 'varchar',
            'size' => '7',
            'default' => NULL,
        ],
        'VztahP' =>
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
        'PSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'Okres' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'RefZeme' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Firma2' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Ulice2' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Obec2' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'PSC2' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'Klic' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'ICO' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'ICDPH' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'Tel' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => NULL,
        ],
        'Fax' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => NULL,
        ],
        'GSM' =>
        [
            'type' => 'varchar',
            'size' => '24',
            'default' => NULL,
        ],
        'Email' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => NULL,
        ],
        'WWW' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Registr' =>
        [
            'type' => 'varchar',
            'size' => '160',
            'default' => NULL,
        ],
        'PodporaBI' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'OfferForBackup' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Settings' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'LogoTp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Logo' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'LogoBgnd' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Stamp' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
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
