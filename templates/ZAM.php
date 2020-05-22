<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of ZAM
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class ZAM extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'ZAM';

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
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Prijmeni' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Rozena' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'PrijmeniDalsi' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'Titul' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'RelPohl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatNar' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'ShowRC' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'OsCislo' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'COP' =>
        [
            'type' => 'varchar',
            'size' => '12',
            'default' => NULL,
        ],
        'MistoNar' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'Narodn' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'StatPris' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'Cizinec' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'CizCisPojZP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'CizCisPojSP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'CizUlice' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'CizCP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'CizObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'CizPSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'CizMisto' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'CizDokladTyp' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'CizDokladStat' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'CizStatNar' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'CizNositel' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'CizUlice2' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'CizCP2' =>
        [
            'type' => 'varchar',
            'size' => '8',
            'default' => NULL,
        ],
        'CizObec2' =>
        [
            'type' => 'varchar',
            'size' => '48',
            'default' => NULL,
        ],
        'CizPostCode' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'CizStat' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'CizCislo' =>
        [
            'type' => 'varchar',
            'size' => '25',
            'default' => NULL,
        ],
        'Vzdelani' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'Obecne' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'RelStav' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Spolec' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
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
        'KonUlice' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'KonCP' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'KonObec' =>
        [
            'type' => 'varchar',
            'size' => '45',
            'default' => NULL,
        ],
        'KonPSC' =>
        [
            'type' => 'varchar',
            'size' => '15',
            'default' => NULL,
        ],
        'Tel' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'Email' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => NULL,
        ],
        'RefMist' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefStr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PracDobZ' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'PracDobK' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'Zarazeni' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Ucet' =>
        [
            'type' => 'varchar',
            'size' => '34',
            'default' => NULL,
        ],
        'KodBanky' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'VarSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'SpecSym' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'RelVypl' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelVyplZ' =>
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
        'RelDruhZOld' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelDruhZ2011' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatNast' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatVstup' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatOdchUrc' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatOdch' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'OdpracR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'OdpracD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'MzdaOdch' =>
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
        'TydenDni' =>
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
        'KcSzM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcOsOhod' =>
        [
            'type' => 'money',
            'size' => '19',
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
        'Premie' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'KcPremie' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'DovStara' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DovNar' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DovPrech' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DovCerp' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'DovProplac' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'RefPoj' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefStavDP' =>
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
        'Posta' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'PredPoj' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'SoucPoj' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'RefFond' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'VarPF' =>
        [
            'type' => 'varchar',
            'size' => '20',
            'default' => NULL,
        ],
        'SpecPF' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'KcPFond' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcPFMax' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ProcPF' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'KcPrumL' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'KcVVZL' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'RocZuct' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'GlxRidic' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KcDanURZ' =>
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
        'RelMesRZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DPredZam' =>
        [
            'type' => 'varchar',
            'size' => '128',
            'default' => NULL,
        ],
        'JeStudent' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Stat' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'StatKonAdr' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'DDrDuch' =>
        [
            'type' => 'varchar',
            'size' => '25',
            'default' => NULL,
        ],
        'KcDHrPre' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'DZapocR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DZapocD' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DSdeleni' =>
        [
            'type' => 'varchar',
            'size' => '152',
            'default' => NULL,
        ],
        'DSdel2' =>
        [
            'type' => 'varchar',
            'size' => '152',
            'default' => NULL,
        ],
        'RelOdstupne' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelUkonc' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DDuvod' =>
        [
            'type' => 'varchar',
            'size' => '148',
            'default' => NULL,
        ],
        'JeSmluvni' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SmlSpNosPoj' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'SmlZamIC' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'SmlDatZac' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'SmlDatKon' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DKvalif' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'DJinSdel' =>
        [
            'type' => 'varchar',
            'size' => '170',
            'default' => NULL,
        ],
        'DatDuchodOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatDuchVekOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatDuchodPrizOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Nerezident' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DicTyp' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'DIC' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'KcZahrPoj' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'ZmenaPoj' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'ZmenaPojDatum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RefNovaPoj' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Heslo' =>
        [
            'type' => 'varchar',
            'size' => '12',
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
        'NullCheck_OsCislo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * ZAM handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
