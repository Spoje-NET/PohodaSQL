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
 * Description of FA.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Faktura extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'FA';

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
        'UsrOrder' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCin' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStr' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloZAK' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'RefUcet' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefZeme' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelPk' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpDPH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpFak' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDrFak' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelMobch' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelForUh' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelObDPH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelObKH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelObSH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDruh' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ZaokrFV' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ZpOdpZal' => [
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
        'Polozky' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DanDokl' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Vyrizeno' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'TextDokl' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'BPrenes' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Cislo' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RelCR' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PDoklad' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'VarSym' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'ParSym' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'CisloKHDPH' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SText' => [
            'type' => 'varchar',
            'size' => '240',
            'default' => null,
        ],
        'Datum' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatUcP' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSplat' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelDobr' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelStorn' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TpStorn' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DatStorn' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatLikv' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatZdPln' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatOdDPH' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatKHDPH' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatObj' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'HistSzDPH' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DICRegDPHEU' => [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'MOSS' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'MOSSDukaz' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RelObMOSS' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZpVypDPH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpCalcDPH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Kc0' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc1' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH1' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc2' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH2' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Kc3' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH3' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZaloha' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCelkem' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcLikv' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcKRZaloha' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcU' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPrepl' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPreplCelkem' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZaokr' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcUplat' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcP' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPUpr' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'DatPrik' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RefCM' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DenEUR' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'CmMnoz' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CmKurs' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Cm0' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmZaloha' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmCelkem' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmLikv' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmU' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmZaokr' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmP' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmPUpr' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'DatSplatPozas' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPozas' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcLikvPozas' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmPozas' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmLikvPozas' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'OrigKc1' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'OrigKc2' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KZapoctu' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CisloObj' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RefAD' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefADdod' => [
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
        'Email' => [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'Tel' => [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'GSM' => [
            'type' => 'varchar',
            'size' => '24',
            'default' => null,
        ],
        'Fax' => [
            'type' => 'varchar',
            'size' => '24',
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
        'CenyIDS' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'RefDopravci' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatVytEZ' => [
            'type' => 'datetime',
            'size' => null,
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
        'PrijZprava' => [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'SpecSym' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'KonstSym' => [
            'type' => 'varchar',
            'size' => '4',
            'default' => null,
        ],
        'IsDocID' => [
            'type' => 'varchar',
            'size' => '36',
            'default' => null,
        ],
        'IsCasRoz' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'TiskFM' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'PlatTerm' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'mPohoda' => [
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
        'Lock' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Lock1' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'RelStavEET' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'StornoEET' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefEETProfil' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatArchiv' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Archived' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'NullCheck_Cislo' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * FA handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, array $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
