<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of MZ
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class MZ extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'MZ';

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
        'UsrOrder' =>
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
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Email' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'OsCislo' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'ZvlSazD' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DUvazek' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'RelDruhM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDruhZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Premie' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'KcOsOhod' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPremie' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Prohlas' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefPoj' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PojStat' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'BezSoc' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'MzdaPoUkonc' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeSocZAM' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeDuchZAM' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeMRZAM' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeDuch' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeMR' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeDohoda10K' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeSocLpripoj' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeDuchSporZAM' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeDuchSpor' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'BezZdr' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeZdrZAM' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'BezDane' =>
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
        'RelMes' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DnyKal' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => null,
        ],
        'DnyStSv' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => null,
        ],
        'DnyPrac' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => null,
        ],
        'DovolZ' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Dovol' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DnySvat' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => null,
        ],
        'DnyPlacV' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodPlacV' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'KcDov' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSvatN' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPlacV' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Neplac' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodNepl' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Neomluv' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodNeoml' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Nemoc' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodNem' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DnyVojCv' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodVojCv' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DnyVojZS' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DnyMater' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DnyOCR' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DnyOCRdlo' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DnyOPP' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DnyProstoje' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodMater' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodOCR' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodOCRdlo' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodOPP' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodProstoje' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'KcVojCv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVojZS' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZtratV' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcProstoje' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'NemKal' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'NahrDoby' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'NahrDobyDP' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DnyOdpra' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodOdpra' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodPracSvat' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'KcSzM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'PocJedn' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KcZaklM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPresZM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSvatZM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'HodPres' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'KcPres' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'HodSvat' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodJproc' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodProst' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodNoc' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodJkor' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodJkor2' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'HodJkor3' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'KcSvat' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcJproc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcProst' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNoc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcJkor' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcJkor2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcJkor3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOsOhoM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPremM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDoplat' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNahrZ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'TxNahrZ' =>
        [
            'type' => 'varchar',
            'size' => '30',
            'default' => null,
        ],
        'KcHrubaM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZvZkPj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNatPj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSocZakLimt' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSocZak' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'SocUprMVZ' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcSocUprEdit' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSocUprLimt' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSocUpr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSoc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSocL' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSocLsleva' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSocLslevaSpec' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZdrZakLimt' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZdrZak' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ZdrUprMVZ' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcZdrUprEdit' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZdrUprLimt' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZdrUpr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZdr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZdrL' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZdrLshm' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSocLshm' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNzdZak' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNzdDet' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNzdInv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNzdOst' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZivPoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZivOs' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOdstup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPripoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPripOs' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZdaM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZvZkBP' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNatBP' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDanPrS' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDanZal' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDanBon' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZalDan' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDanUpr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPreplDanRZ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDoplDanBonRZ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCistaM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDavNem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNahrNem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNadLimitPrijem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcFiktPovPoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDuchSporZak' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDuchSporUpr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDuchSpor' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDuchSporSniz' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ProplacDovol' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'KcProplacDovol' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDavOCR' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDavPPM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDavVyr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcSrazky' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOsvobP' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOsvobP2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNahrN2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcNahrN' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'TxNahrN' =>
        [
            'type' => 'varchar',
            'size' => '30',
            'default' => null,
        ],
        'KcZaloha' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCastH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVyuct' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelVyplM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcCastHM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPrum' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatZauct' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zarazeni' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
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
        'Pozn2' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
    ];

    /**
     * MZ handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
