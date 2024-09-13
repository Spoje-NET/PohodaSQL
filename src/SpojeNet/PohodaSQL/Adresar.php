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
 * Description of AD.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Adresar extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'AD';

    /**
     * SQL Table structure.
     *
     * @const array
     */
    public $struct = [
        'ID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'UsrOrder' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sel' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Labels' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RefAD' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Cislo' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'RelCR' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Firma' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Utvar' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Jmeno' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Ulice' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'PSC' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Obec' => [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'RefZeme' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Okres' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'ICO' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'DIC' => [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'ICDPH' => [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'RelTypDIC' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Firma2' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Utvar2' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Jmeno2' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Ulice2' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'PSC2' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Obec2' => [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'RefZeme2' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Tel2' => [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'Email2' => [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'Ucet' => [
            'type' => 'varchar',
            'size' => '34',
            'default' => null,
        ],
        'KodBanky' => [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'Tel' => [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'Fax' => [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'GSM' => [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'Email' => [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'WWW' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Skype' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'ICQ' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'GPS' => [
            'type' => 'varchar',
            'size' => '38',
            'default' => null,
        ],
        'DataBox' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'CenyIDS' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'RelForUh' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ADSplat' => [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'ADToler' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ADKredit' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcObrat' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcObrat2' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Skupina' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Klic' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'P1' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'P2' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'P3' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'P4' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'P5' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'P6' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'mPohoda' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelDruh' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Ost1' => [
            'type' => 'varchar',
            'size' => '8',
            'default' => null,
        ],
        'Ost2' => [
            'type' => 'varchar',
            'size' => '8',
            'default' => null,
        ],
        'Zprava' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Smlouva' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'Funkce' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RodCisl' => [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'Osloveni' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'DatNar' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelPohl' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpIo' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IoID' => [
            'type' => 'varchar',
            'size' => '35',
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
        'RelPkFP' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpDPHFP' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelPkFV' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpDPHFV' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefUcetFV' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefOsoba' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStr' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCin' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloZAK' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'RefCM' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSzDPH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSzDPHskz' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'GdprDatPreAkt' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'GdprDatPreHist' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'GdprDatProAkt' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'GdprDatProHist' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'GdprDatPostAkt' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'GdprDatPostHist' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'GdprOmezeniZprac' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Oznacil' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Ucetni' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Pozn' => [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Pozn2' => [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'NullCheck_Cislo' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * AD handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
