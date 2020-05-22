<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of NEMPRIpol
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class NEMPRIpol extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'NEMPRIpol';

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
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PoradCis' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RokMZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'MesicMZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefZAMpomer' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefMZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefNeprit' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CisPotvrz' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => NULL,
        ],
        'Poznamka' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => NULL,
        ],
        'KodOSSZ' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'NazevOSSZ' =>
        [
            'type' => 'varchar',
            'size' => '128',
            'default' => NULL,
        ],
        'DruhDavky' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => NULL,
        ],
        'Prijmeni' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => NULL,
        ],
        'VSZam' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => NULL,
        ],
        'ICZam' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => NULL,
        ],
        'JmZam' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'ZamOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'ZamDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelDruhZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RozObdOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'RozObdDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatR1' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR1' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR2' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR2' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR3' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR3' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR4' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR4' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR4' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR5' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR5' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR5' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR6' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR6' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR6' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR7' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR7' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR7' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR8' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR8' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR8' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR9' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR9' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR9' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR10' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR10' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR10' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR11' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR11' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR11' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatR12' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'KcPrijR12' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'VyldnyR12' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'PravVysPrij' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'PocOdHod' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'PracDob' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => NULL,
        ],
        'Pracoval' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'KcPrijMR' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'PobiraDuch' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DruhDuch' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => NULL,
        ],
        'JeStudent' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SpadaDoPrazd' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'VolnPrvZamest' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'VolnoBezNahr' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'VolnoBezNahrOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'VolnoBezNahrDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'NastupujePPM' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'NarDitete' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'NerDVZPPM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => NULL,
        ],
        'PrJinPrace' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Srazka' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Insolvence' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Sdeleni' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => NULL,
        ],
        'KonPrac' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => NULL,
        ],
        'KontTel' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => NULL,
        ],
        'KontEmail' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => NULL,
        ],
        'MistPod' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
        'Zahranici' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'PrevodDatum' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'PocetPriloh' =>
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
        'Err' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
    ];

    /**
     * NEMPRIpol handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}
