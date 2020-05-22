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
            'default' => NULL,
        ],
        'UsrOrder' =>
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
        'RefZAM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Email' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => NULL,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'OsCislo' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'ZvlSazD' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DUvazek' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'RelDruhM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelDruhZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Premie' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'KcOsOhod' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPremie' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Prohlas' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RefPoj' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PojStat' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'BezSoc' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'MzdaPoUkonc' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JeSocZAM' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JeDuchZAM' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JeMRZAM' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JeDuch' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JeMR' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JeDohoda10K' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JeSocLpripoj' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JeDuchSporZAM' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JeDuchSpor' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'BezZdr' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'JeZdrZAM' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'BezDane' =>
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
        'RelMes' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DnyKal' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => NULL,
        ],
        'DnyStSv' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => NULL,
        ],
        'DnyPrac' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => NULL,
        ],
        'DovolZ' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Dovol' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DnySvat' =>
        [
            'type' => 'tinyint',
            'size' => '3',
            'default' => NULL,
        ],
        'DnyPlacV' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodPlacV' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'KcDov' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSvatN' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPlacV' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Neplac' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodNepl' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Neomluv' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodNeoml' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Nemoc' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodNem' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DnyVojCv' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodVojCv' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DnyVojZS' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DnyMater' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DnyOCR' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DnyOCRdlo' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DnyOPP' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DnyProstoje' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodMater' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodOCR' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodOCRdlo' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodOPP' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodProstoje' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'KcVojCv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcVojZS' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZtratV' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcProstoje' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'NemKal' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'NahrDoby' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'NahrDobyDP' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DnyOdpra' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodOdpra' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodPracSvat' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'KcSzM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'PocJedn' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'KcZaklM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPresZM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSvatZM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'HodPres' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'KcPres' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'HodSvat' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodJproc' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodProst' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodNoc' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodJkor' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodJkor2' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'HodJkor3' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'KcSvat' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcJproc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcProst' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNoc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcJkor' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcJkor2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcJkor3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcOsOhoM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPremM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDoplat' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNahrZ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'TxNahrZ' =>
        [
            'type' => 'varchar',
            'size' => '30',
            'default' => NULL,
        ],
        'KcHrubaM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZvZkPj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNatPj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSocZakLimt' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSocZak' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'SocUprMVZ' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KcSocUprEdit' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSocUprLimt' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSocUpr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSoc' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSocL' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSocLsleva' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSocLslevaSpec' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZdrZakLimt' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZdrZak' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ZdrUprMVZ' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KcZdrUprEdit' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZdrUprLimt' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZdrUpr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZdr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZdrL' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZdrLshm' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSocLshm' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNzdZak' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNzdDet' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNzdInv' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNzdOst' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZivPoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZivOs' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcOdstup' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPripoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPripOs' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZdaM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZvZkBP' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNatBP' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDanPrS' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDanZal' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDanBon' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcZalDan' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDanUpr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPreplDanRZ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDoplDanBonRZ' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcCistaM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDavNem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNahrNem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNadLimitPrijem' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcFiktPovPoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDuchSporZak' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDuchSporUpr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDuchSpor' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDuchSporSniz' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ProplacDovol' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'KcProplacDovol' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDavOCR' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDavPPM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcDavVyr' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcSrazky' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcOsvobP' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcOsvobP2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNahrN2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcNahrN' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'TxNahrN' =>
        [
            'type' => 'varchar',
            'size' => '30',
            'default' => NULL,
        ],
        'KcZaloha' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcCastH' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcVyuct' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RelVyplM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'KcCastHM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPrum' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'Datum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatZauct' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Zarazeni' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
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
        'Pozn2' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
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
