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
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PoradCis' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RokMZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'MesicMZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefZAMpomer' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefMZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefNeprit' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisPotvrz' =>
        [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'Poznamka' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => null,
        ],
        'KodOSSZ' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'NazevOSSZ' =>
        [
            'type' => 'varchar',
            'size' => '128',
            'default' => null,
        ],
        'DruhDavky' =>
        [
            'type' => 'varchar',
            'size' => '3',
            'default' => null,
        ],
        'Prijmeni' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Jmeno' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RodCisl' =>
        [
            'type' => 'varchar',
            'size' => '11',
            'default' => null,
        ],
        'VSZam' =>
        [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'ICZam' =>
        [
            'type' => 'varchar',
            'size' => '35',
            'default' => null,
        ],
        'JmZam' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'ZamOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'ZamDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelDruhZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RozObdOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RozObdDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatR1' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR1' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR1' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR2' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR2' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR2' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR3' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR3' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR3' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR4' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR4' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR4' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR5' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR5' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR5' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR6' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR6' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR6' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR7' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR7' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR7' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR8' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR8' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR8' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR9' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR9' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR9' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR10' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR10' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR10' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR11' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR11' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR11' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatR12' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'KcPrijR12' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'VyldnyR12' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PravVysPrij' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'PocOdHod' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'PracDob' =>
        [
            'type' => 'real',
            'size' => '24',
            'default' => null,
        ],
        'Pracoval' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcPrijMR' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'PobiraDuch' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DruhDuch' =>
        [
            'type' => 'varchar',
            'size' => '1',
            'default' => null,
        ],
        'JeStudent' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SpadaDoPrazd' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'VolnPrvZamest' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'VolnoBezNahr' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'VolnoBezNahrOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'VolnoBezNahrDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'NastupujePPM' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'NarDitete' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'NerDVZPPM' =>
        [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'PrJinPrace' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Srazka' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Insolvence' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Sdeleni' =>
        [
            'type' => 'varchar',
            'size' => '200',
            'default' => null,
        ],
        'KonPrac' =>
        [
            'type' => 'varchar',
            'size' => '100',
            'default' => null,
        ],
        'KontTel' =>
        [
            'type' => 'varchar',
            'size' => '16',
            'default' => null,
        ],
        'KontEmail' =>
        [
            'type' => 'varchar',
            'size' => '98',
            'default' => null,
        ],
        'MistPod' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'Zahranici' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'PrevodDatum' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'PocetPriloh' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStavDP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Err' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
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
