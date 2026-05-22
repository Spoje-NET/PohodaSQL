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
 * Employee (Zaměstnanec).
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Zamestnanec extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'ZAM';

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
        'RelCR' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Jmeno' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Prijmeni' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Rozena' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'PrijmeniDalsi' => [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'Titul' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'RelPohl' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatNar' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RodCisl' => [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'ShowRC' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'OsCislo' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'COP' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'MistoNar' => [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'Narodn' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'StatPris' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Cizinec' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'CizCisPojZP' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'CizCisPojSP' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'CizUlice' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'CizCP' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'CizObec' => [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'CizPSC' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'CizMisto' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'CizDokladTyp' => [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'CizDokladStat' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'CizStatNar' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'CizNositel' => [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'CizUlice2' => [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'CizCP2' => [
            'type' => 'varchar',
            'size' => '8',
            'default' => null,
        ],
        'CizObec2' => [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'CizPostCode' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'CizStat' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'CizCislo' => [
            'type' => 'varchar',
            'size' => '25',
            'default' => null,
        ],
        'Vzdelani' => [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'Obecne' => [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'RelStav' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Spolec' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Ulice' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'CP' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'Obec' => [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'PSC' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'KonUlice' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'KonCP' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'KonObec' => [
            'type' => 'varchar',
            'size' => '45',
            'default' => null,
        ],
        'KonPSC' => [
            'type' => 'varchar',
            'size' => '15',
            'default' => null,
        ],
        'Tel' => [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'Email' => [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'Email2' => [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'DataBox' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'RefMist' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStr' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PracDobZ' => [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'PracDobK' => [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'Zarazeni' => [
            'type' => 'varchar',
            'size' => '42',
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
        'VarSym' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'SpecSym' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'RelVypl' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelVyplZ' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDruhZ' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDruhZOld' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDruhZ2011' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSkZarucMzda' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatNast' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatVstup' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatOdchUrc' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatOdch' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'OdpracR' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'OdpracD' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'MzdaOdch' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DUvazek' => [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'TUvazek' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'TydenDni' => [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'RelDruhM' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcSzM' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOsOhod' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZaloha' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcCastH' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Premie' => [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'KcPremie' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'DovStara' => [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DovNar' => [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DovPrech' => [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DovCerp' => [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'DovProplac' => [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'JeDovNarok' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeDovRucni' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeDovRucni2' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'JeDovRucni3' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DovTyd' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovTyd2' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovTyd3' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovNarHod' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovNarHod2' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovNarHod3' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovStaraDny' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovStaraHod' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovKracHod' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovKracHod2' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovKracHod3' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovCerpDny' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovCerpDny2' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovCerpDny3' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovCerpHod' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovCerpHod2' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovCerpHod3' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovZbyvHod' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovZbyvHod2' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DovZbyvHod3' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RefPoj' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStavDP' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TypELDP' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Posta' => [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'PredPoj' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'SoucPoj' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'RefFond' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'VarPF' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'SpecPF' => [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'KcPFond' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPFMax' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ProcPF' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KcPrumL' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcVVZL' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RocZuct' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'GlxRidic' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcDanURZ' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcPreplDanRZ' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDoplDanBonRZ' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelMesRZ' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DPredZam' => [
            'type' => 'varchar',
            'size' => '128',
            'default' => null,
        ],
        'JeStudent' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Stat' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'StatKonAdr' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'DDrDuch' => [
            'type' => 'varchar',
            'size' => '25',
            'default' => null,
        ],
        'KcDHrPre' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'DZapocR' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DZapocD' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DSdeleni' => [
            'type' => 'varchar',
            'size' => '152',
            'default' => null,
        ],
        'DSdel2' => [
            'type' => 'varchar',
            'size' => '152',
            'default' => null,
        ],
        'RelOdstupne' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DuvodUkonceni' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'RelUkonc' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DDuvod' => [
            'type' => 'varchar',
            'size' => '148',
            'default' => null,
        ],
        'JeSmluvni' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SmlSpNosPoj' => [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'SmlZamIC' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'SmlDatZac' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'SmlDatKon' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DKvalif' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'DJinSdel' => [
            'type' => 'varchar',
            'size' => '170',
            'default' => null,
        ],
        'DatDuchodOd' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDuchVekOd' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatDuchodPrizOd' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Nerezident' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DicTyp' => [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'DIC' => [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'KcZahrPoj' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ZmenaPoj' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'ZmenaPojDatum' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RefNovaPoj' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zachranar' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Riziko' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefCMzam' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Heslo' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
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
            'size' => '2147483647',
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
        'NullCheck_OsCislo' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * ZAM handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, array $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
