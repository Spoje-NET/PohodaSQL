<?php
/**
 * PohodaSQL - Number Row Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright 2008,2009,2010,2011,2020 Vitex Software & Michal Tomášek Murka.cz
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of SCRady
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class SCRady extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'sCRady';

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
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefIDor' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'IDS' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'SText' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
        'RelCrAg' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        /*
          RelCrAg	Nazev_agendy
          1	Peněžní deník
          2	Vydané faktury
          3	Přijaté faktury
          4	Drobný majetek
          5	Dlouhodobý majetek
          6	Příjemky
          7	Výdejky
          8	Převod
          9	Výroba
          10	Prodejna
          11	Přijaté objednávky
          12	Vydané objednávky
          13	Adresář
          14	Příkazy k úhradě
          15	Deník jízd
          16	Evidence vozidel
          17	Mzdy
          18	Ostatní pohledávky
          19	Ostatní závazky
          20	Zásoby
          21	Skladové soupravy
          22	Cenové skupiny
          24	Přístupová práva
          25	Personalistika
          27	Pokladna
          28	Banka
          29	Interní doklady
          30	Likvidace
          31	Účetní deník
          32	Účtová osnova
          33	Předkontace
          34	Kódy bank
          35	Číselné řady
          36	Konstantní symboly
          37	Činnosti
          38	Střediska
          39	Zakázky
          40	Členění DPH
          41	Bankovní účty
          42	Uživatelské nastavení
          43	Vydané zálohové faktury
          44	Přijaté zálohové faktury
          45	Účetní jednotky
          46	Obce a PSČ
          47	Globální nastavení
          48	Země
          49	Skupiny
          50	Klíče
          51	Závazky
          52	Prodejní ceny
          53	Výdej
          54	Příjem
          55	Pohyby
          56	Zdravotní pojišťovny
          57	Sklady
          58	Členění skladů
          59	Předkontace
          60	Umístění majetku
          61	Odpisové plány
          62	Položky
          63	Počáteční stavy účtů
          64	Výchozí stavy účtů
          65	Seznam řidičů
          69	Počáteční stavy salda
          71	Homebanking
          72	Cizí měny
          75	Kursový lístek
          76	Přiznání DPH
          77	Hotovostní pokladny
          78	Analýza
          79	Leasingový majetek
          80	Hardware
          81	Saldo
          82	Loňský stav výsledkových účtů
          83	Měrné jednotky
          84	Penzijní fondy
          85	Legislativa
          86	Internetové obchody
          88	Výrobní čísla
          89	Životní pojišťovny
          90	Kasy
          91	Inventura
          92	Nabídky
          93	Události
          94	Pobočky
          96	Nepeněžní deník
          97	Poptávky
          98	Výkazy minulého roku

          ##############################################################
          1001 Zasoby

         */
        ],
        'RelCrTyp' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefCrUc' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefPzdJ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpObd' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'mPohoda' =>
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
     * Předpona číselné řady
     * @var string
     */
    public $prefix = NULL;

    /**
     * Hodnota číselné řady
     * @var int
     */
    public $value = 0;

    /**
     * Přidružená agenda
     * @var int
     */
    public $refAg = 0;

    /**
     * Výchozí délka čísla - z leva je dorovnáváno nulami
     * @var int
     */
    public $defaultNumberLength = 5;

    /**
     * číselná řada Pohody
     * 
     * @param string $IDS
     * @param int $RefAg
     * @see https://redmine.murka.cz:8443/projects/ease-triband/wiki
     * @param string $SText
     */
    public function __construct($identifier = null, $options = array())
    {
        parent::__construct($identifier, $options);
        if (array_key_exists('IDS', $identifier) && array_key_exists('RelCrAg',
                $identifier)) {
            $this->init(
                $identifier['IDS'], $identifier['RelCrAg'],
                (array_key_exists('SText', $identifier) ? $identifier['SText'] : ''),
                (array_key_exists('NumberLength', $identifier) ? $identifier['NumberLength']
                        : 5),
                (array_key_exists('Rok', $identifier) ? $identifier['Rok'] : intval(date('Y')))
            );
        }
    }

    /**
     * Nastaví číselnou řadu
     * 
     * @param string $IDS - identifikátor číselné řady
     * @param int $RefAg - odkaz na agendu v pohodě
     * @param string $SText
     * @param int $NumberLength
     */
    public function init($IDS, $RefAg, $SText = '', $NumberLength = NULL,
                         $Rok = null)
    {
        $this->setDefaultNumberLength($NumberLength);
        $this->setDataValue('IDS', $IDS);
        $this->prefix = $IDS;
        $this->refAg  = $RefAg;
        if (!empty($SText)) {
            $this->setDataValue('SText', $SText);
        }
        if ($Rok) {
            $this->setDataValue('Rok', $Rok);
        }

        $myId = $this->isKnown($IDS);

        if ($myId) {
            $this->loadFromSQL($myId);
        } else {
            $this->create($SText);
        }
    }

    /**
     * Test, zdali je daná číselná řada již známa
     * 
     * @param string $KeyIDS
     * 
     * @return int
     */
    public function isKnown($keyIDS = NULL)
    {
        if (empty($KeyIDS)) {
            $KeyIDS = $this->getDataValue('IDS');
        }

        $sth = $this->getPdo()->prepare('SELECT ID FROM ['.$this->myTable.'] WHERE Rok='.$this->getDataValue('Rok')." AND IDS LIKE '".$KeyIDS."'");
        return $sth->execute() ? intval($sth->fetchColumn()) : null;
    }

    /**
     * Vytvoří novou číselnou řadu
     *
     * @param unsigned int $RelCrAg Povinné číslo agendy
     * @param string $sText
     * @param string $CrAg = číslo agendy
     */
    public function create($sText = '', $CrAg = NULL)
    {
        if (!$this->Pohoda['Rok']) $this->Pohoda['Rok'] = intval(date('Y'));

        if ($sText) {
            $this->Pohoda['SText'] = ($sText);
        } else {
            if (isset($this->refAg) && strlen(trim($this->refAg))) {
                $this->Pohoda['SText'] = $this->refAg;
            } else {
                $this->Pohoda['SText'] = $this->Pohoda['IDS'];
            }
        }

        $this->Pohoda['Cislo']     = $this->GetInitialValue();
        $this->Pohoda['DatCreate'] = (new \DateTime("now",
                new \DateTimeZone("UTC")))->format("Y-m-d\TH:i:s");
        $this->MarkUpCols();
        if ($CrAg) {
            $this->Pohoda['RelCrAg'] = $CrAg;
        }
        $this->Pohoda['Pozn'] = ('Vytvořeno automaticky');
        if ($this->Save()) {
            $this->AddToLog('Vytvarim ciselnou radu '.$this->Pohoda['SText'].': '.$this->Pohoda['IDS'].$this->Pohoda['Cislo'],
                'debug');
        } else {
            $this->Error('Error creating NumRow ', $this->Pohoda);
        }
    }

    /**
     * Vrací výchozí počet nul při zakládání číselné řady
     * 
     * @param int $Size
     * 
     * @return string
     */
    function getInitialValue($Size = NULL)
    {
        if (!$Size) {
            $Size = $this->defaultNumberLength;
        }
        return str_repeat('0', $Size);
    }

    /**
     * Nastaví výchozí délku hodnoty číselné řady na níž je z leva doplňována nulami
     * 
     * @param int $numberLength
     * 
     * @return boolean success
     */
    function setDefaultNumberLength($numberLength)
    {
        if ($numberLength) {
            $this->defaultNumberLength = $numberLength;
            return TRUE;
        }
        return FALSE;
    }

    /**
     * Vrací aktuální hodnotu číselné řady
     * 
     * @return int
     */
    public function getValue()
    {
        return $this->getDataValue('IDS').$this->getDataValue('Cislo');
    }

    /**
     * Vrací následující hodnotu číselné řady
     * 
     * @param boolean $use uložit novou hodnotu do db ?
     * 
     * @return int
     */
    public function nextValue($use = false)
    {
        if (!empty($this->getData())) {
            if ($use) {
                $this->useValue();
            }
            $this->value = $this->getValue();
            return $this->value;
        } else {
            $this->addStatusMessage('Error loading LastNumber '.$lastNumber,
                'error');
            return NULL;
        }
    }

    /**
     * Uloží číselnou řadu do databáze
     * 
     * @return array - výsledky uložení do shopu a pohody
     */
    function save()
    {
        $this->addToLog('Save: '.$this->getValue());
        return $this->updateToSQL([
                'ID' => $this->getMyKey(),
                'Cislo' => $this->getDataValue('Cislo'),
                'Rok' => $this->getDataValue('Rok'),
                'DatSave' => (new \DateTime("now", new \DateTimeZone("UTC")))->format("Y-m-d\TH:i:s")]
        );
    }

    /**
     * Použije číslenou řadu - zvedne hodnotu a uloží do DB
     * 
     * @return boolean
     */
    function useValue()
    {
        if (empty($this->getDataValue('Cislo'))) {
            $this->addStatusMessage('Unknown Cislo', 'error');
            return NULL;
        }
        $length      = strlen($this->getDataValue('Cislo'));
        $value       = intval($this->getDataValue('Cislo'));
        $this->setDataValue('Cislo', sprintf('%0'.$length.'s', $value + 1));
        $this->value = $this->prefix.$this->getDataValue('Cislo');
        return $this->save();
    }

    /**
     * Patří hodnota do mé číselné řady
     * 
     * @param string $Value NumRow value
     * 
     * @return bool
     */
    function IsFromMyNumbers($Value)
    {
        //TODO: stejny prefix, stejna delka, mensi nez stavajici ?
        $PrefixPos = strpos($Value, $this->prefix);
        if (( $PrefixPos === false) || ($PrefixPos != 0)) {
            return false;
        }
        $Cislo      = str_replace($this->prefix, '', $Value);
        $LastNumber = $this->Load();
        if (strlen($Cislo) != strlen($LastNumber['Cislo'])) {
            return false;
        }
        if (intval($Cislo) < intval($LastNumber['Cislo'])) {
            return false;
        }
        return true;
    }
}

/**
 * Nezačíná od nuly každý rok, ale pokračuje dál
 */
//class EaseContiunuesNumRow extends EaseNumRow {
//    function GetInitialValue($Size = NULL) {
//        $Rok = $this->GetPohodaValue('Rok');
//        $LastNumber = $this->MSDbLink->QueryToArray('SELECT Cislo FROM ' . $this->MSTable . ' WHERE Rok=' . ($this->Pohoda['Rok']-1)  . ' AND IDS LIKE ' . "'" . $this->Pohoda['IDS'] . "' AND Cislo NOT LIKE ''");
//        if (isset($LastNumber[0])) {
//            return $LastNumber[0]['Cislo'];
//        }
//        return parent::GetInitialValue($Size);
//    }
//}
