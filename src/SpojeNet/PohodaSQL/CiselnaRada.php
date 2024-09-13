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
 * Description of SCRady.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class CiselnaRada extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'sCRady';

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
        'Rok' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefIDor' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'IDS' => [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'Cislo' => [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'SText' => [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'RelCrAg' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
            /*
          RelCrAg    Nazev_agendy
          1    Peněžní deník
          2    Vydané faktury
          3    Přijaté faktury
          4    Drobný majetek
          5    Dlouhodobý majetek
          6    Příjemky
          7    Výdejky
          8    Převod
          9    Výroba
          10    Prodejna
          11    Přijaté objednávky
          12    Vydané objednávky
          13    Adresář
          14    Příkazy k úhradě
          15    Deník jízd
          16    Evidence vozidel
          17    Mzdy
          18    Ostatní pohledávky
          19    Ostatní závazky
          20    Zásoby
          21    Skladové soupravy
          22    Cenové skupiny
          24    Přístupová práva
          25    Personalistika
          27    Pokladna
          28    Banka
          29    Interní doklady
          30    Likvidace
          31    Účetní deník
          32    Účtová osnova
          33    Předkontace
          34    Kódy bank
          35    Číselné řady
          36    Konstantní symboly
          37    Činnosti
          38    Střediska
          39    Zakázky
          40    Členění DPH
          41    Bankovní účty
          42    Uživatelské nastavení
          43    Vydané zálohové faktury
          44    Přijaté zálohové faktury
          45    Účetní jednotky
          46    Obce a PSČ
          47    Globální nastavení
          48    Země
          49    Skupiny
          50    Klíče
          51    Závazky
          52    Prodejní ceny
          53    Výdej
          54    Příjem
          55    Pohyby
          56    Zdravotní pojišťovny
          57    Sklady
          58    Členění skladů
          59    Předkontace
          60    Umístění majetku
          61    Odpisové plány
          62    Položky
          63    Počáteční stavy účtů
          64    Výchozí stavy účtů
          65    Seznam řidičů
          69    Počáteční stavy salda
          71    Homebanking
          72    Cizí měny
          75    Kursový lístek
          76    Přiznání DPH
          77    Hotovostní pokladny
          78    Analýza
          79    Leasingový majetek
          80    Hardware
          81    Saldo
          82    Loňský stav výsledkových účtů
          83    Měrné jednotky
          84    Penzijní fondy
          85    Legislativa
          86    Internetové obchody
          88    Výrobní čísla
          89    Životní pojišťovny
          90    Kasy
          91    Inventura
          92    Nabídky
          93    Události
          94    Pobočky
          96    Nepeněžní deník
          97    Poptávky
          98    Výkazy minulého roku

          ##############################################################
          1001 Zasoby

             */
        ],
        'RelCrTyp' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCrUc' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPzdJ' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpObd' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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
        'Pozn' => [
            'type' => 'text',
            'size' => null,
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
    ];

    /**
     * Předpona číselné řady.
     */
    public string $prefix = null;

    /**
     * Hodnota číselné řady.
     *
     * @var int|string
     */
    public $value = 0;

    /**
     * Přidružená agenda.
     */
    public int $refAg = 0;

    /**
     * Výchozí délka čísla - z leva je dorovnáváno nulami.
     */
    public int $defaultNumberLength = 5;

    /**
     * číselná řada Pohody.
     *
     * @param string $identifier IDS
     * @param array  $options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);

        if (\array_key_exists('IDS', $identifier) && \array_key_exists('RelCrAg', $identifier)) {
            $this->init(
                $identifier['IDS'],
                $identifier['RelCrAg'],
                \array_key_exists('SText', $identifier) ? $identifier['SText'] : '',
                \array_key_exists('NumberLength', $identifier) ? $identifier['NumberLength'] : 5,
                \array_key_exists('Rok', $identifier) ? $identifier['Rok'] : (int) (date('Y')),
            );
        }
    }

    /**
     * Nastaví číselnou řadu.
     *
     * @param string     $IDS          - identifikátor číselné řady
     * @param int        $RefAg        - odkaz na agendu v pohodě
     * @param string     $SText
     * @param int        $NumberLength
     * @param null|mixed $Rok
     */
    public function init($IDS, $RefAg, $SText = '', $NumberLength = null, $Rok = null): void
    {
        $this->setDefaultNumberLength($NumberLength);
        $this->setDataValue('IDS', $IDS);
        $this->prefix = $IDS;
        $this->refAg = $RefAg;

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
     * Test, zdali je daná číselná řada již známa.
     *
     * @param string $keyIDS
     *
     * @return int
     */
    public function isKnown($keyIDS = null)
    {
        if (empty($keyIDS)) {
            $keyIDS = $this->getDataValue('IDS');
        }

        $sth = $this->getPdo()->prepare(
            'SELECT ID FROM ['.$this->myTable.'] WHERE Rok='.$this->getDataValue('Rok').
            " AND IDS LIKE '".$keyIDS."'",
        );

        return $sth->execute() ? (int) ($sth->fetchColumn()) : null;
    }

    /**
     * Vytvoří novou číselnou řadu.
     *
     * @param string $sText
     * @param string $CrAg  = číslo agendy
     */
    public function create($sText = '', $CrAg = null): void
    {
        if (!$this->Pohoda['Rok']) {
            $this->Pohoda['Rok'] = (int) date('Y');
        }

        if ($sText) {
            $this->Pohoda['SText'] = $sText;
        } else {
            if (isset($this->refAg) && \strlen(trim($this->refAg))) {
                $this->Pohoda['SText'] = $this->refAg;
            } else {
                $this->Pohoda['SText'] = $this->Pohoda['IDS'];
            }
        }

        $this->Pohoda['Cislo'] = $this->GetInitialValue();
        $this->Pohoda['DatCreate'] = (new \DateTime('now', new \DateTimeZone('UTC')))->format('Y-m-d\\TH:i:s');

        // $this->markUpCols();
        if ($CrAg) {
            $this->Pohoda['RelCrAg'] = $CrAg;
        }

        $this->Pohoda['Pozn'] = 'Vytvořeno automaticky';

        if ($this->Save()) {
            $this->addStatusMessage(
                'Vytvarim ciselnou radu '.$this->Pohoda['SText'].': '.$this->Pohoda['IDS'].
                $this->Pohoda['Cislo'],
                'debug',
            );
        } else {
            $this->addStatusMessage('Error creating NumRow ', $this->Pohoda, 'error');
        }
    }

    /**
     * Vrací výchozí počet nul při zakládání číselné řady.
     *
     * @param int $Size
     *
     * @return string
     */
    public function getInitialValue($Size = null)
    {
        if (!$Size) {
            $Size = $this->defaultNumberLength;
        }

        return str_repeat('0', $Size);
    }

    /**
     * Nastaví výchozí délku hodnoty číselné řady na níž je z leva doplňována nulami.
     *
     * @param int $numberLength
     *
     * @return bool success
     */
    public function setDefaultNumberLength($numberLength)
    {
        if ($numberLength) {
            $this->defaultNumberLength = $numberLength;

            return true;
        }

        return false;
    }

    /**
     * Vrací aktuální hodnotu číselné řady.
     *
     * @return int
     */
    public function getValue()
    {
        return $this->getDataValue('IDS').$this->getDataValue('Cislo');
    }

    /**
     * Vrací následující hodnotu číselné řady.
     *
     * @param bool $use uložit novou hodnotu do db ?
     *
     * @return null|int
     */
    public function nextValue($use = false)
    {
        if (!empty($this->getData())) {
            if ($use) {
                $this->useValue();
            }

            $this->value = $this->getValue();

            return $this->value;
        }

        $this->addStatusMessage('Error loading LastNumber ', 'error');

        return null;
    }

    /**
     * Uloží číselnou řadu do databáze.
     *
     * @return array - výsledky uložení do shopu a pohody
     */
    public function save()
    {
        $this->addStatusMessage('Save: '.$this->getValue(), 'debug');

        return $this->updateToSQL([
            'ID' => $this->getMyKey(),
            'Cislo' => $this->getDataValue('Cislo'),
            'Rok' => $this->getDataValue('Rok'),
            'DatSave' => (new \DateTime('now', new \DateTimeZone('UTC')))->format('Y-m-d\\TH:i:s')]);
    }

    /**
     * Použije číslenou řadu - zvedne hodnotu a uloží do DB.
     *
     * @return bool
     */
    public function useValue()
    {
        if (empty($this->getDataValue('Cislo'))) {
            $this->addStatusMessage('Unknown Cislo', 'error');

            return null;
        }

        $length = \strlen($this->getDataValue('Cislo'));
        $value = (int) $this->getDataValue('Cislo');
        $this->setDataValue('Cislo', sprintf('%0'.$length.'s', $value + 1));
        $this->value = $this->prefix.$this->getDataValue('Cislo');

        return empty($this->save()) === false;
    }

    /**
     * Patří hodnota do mé číselné řady.
     *
     * @param string $value NumRow value
     *
     * @return bool
     */
    public function isFromMyNumbers($value)
    {
        // TODO: stejny prefix, stejna delka, mensi nez stavajici ?
        $prefixPos = strpos($value, $this->prefix);

        if (($prefixPos === false) || ($prefixPos !== 0)) {
            return false;
        }

        $cislo = str_replace($this->prefix, '', $value);
        $lastNumber = $this->loadFromSQL(null);

        if (\strlen($cislo) !== \strlen($lastNumber['Cislo'])) {
            return false;
        }

        if ((int) $cislo < (int) $lastNumber['Cislo']) {
            return false;
        }

        return true;
    }
}

/**
 * Nezačíná od nuly každý rok, ale pokračuje dál.
 */
// class EaseContiunuesNumRow extends EaseNumRow {
//    function GetInitialValue($Size = null) {
//        $Rok = $this->GetPohodaValue('Rok');
//        $LastNumber = $this->MSDbLink->QueryToArray(
//        'SELECT Cislo FROM ' . $this->MSTable . ' WHERE Rok=' . ($this->Pohoda['Rok']-1)  . ' AND IDS LIKE ' . "'" .
//        $this->Pohoda['IDS'] . "' AND Cislo NOT LIKE ''"
//        );
//        if (isset($LastNumber[0])) {
//            return $LastNumber[0]['Cislo'];
//        }
//        return parent::GetInitialValue($Size);
//    }
// }
