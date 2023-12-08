<?php

/**
 * PohodaSQL - Common Agenda engine class
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020,2023 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of Evidence
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Agenda extends \Ease\SQL\Engine
{
    /**
     * Klíčový sloupeček v pohodě
     * @var string
     */
    public $keyColumn = 'ID'; //sloupeček pro defaultní klíčování

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [];

    /**
     * DatCreate column name
     *
     * @var string
     */
    public $createdColumn;

    /**
     * DatSave column name
     *
     * @var string
     */
    public $lastModifiedColumn;

# Pohoda Agendas

    public const CASH_JOURNAL = 1; // Cash Journal                                  | Peněžní deník
    public const ISSUED_INVOICES = 2; // Issued invoices                            | Vydané faktury
    public const RECEIVED_INVOICES = 3; // Received invoices                        | Přijaté faktury
    public const MINOR_ASSETS = 4; // Minor assets                                  | Drobný majetek
    public const FIXED_ASSETS = 5; // Fixed assets                                  | Dlouhodobý majetek
    public const RECEIPTS = 6; // Receipts                                          | Příjemky
    public const DISBURSEMENTS = 7; // Disbursements                                | Výdejky
    public const TRANSFER = 8; // Transfer                                          | Převod
    public const PRODUCTION = 9; // Production                                      | Výroba
    public const SHOP = 10; // Shop                                                 | Prodejna
    public const ORDERS_RECEIVED = 11; // Orders received                           | Přijaté objednávky
    public const ORDERS_ISSUED = 12; // Orders issued                               | Vydané objednávky
    public const ADDRESS_BOOK = 13; // Address book                                 | Adresář
    public const PAYMENT_ORDERS = 14; // Payment orders                             | Příkazy k úhradě
    public const TRIP_LOG = 15; // Trip log                                         | Deník jízd
    public const VEHICLE_REGISTRATION = 16; // Vehicle registration                 | Evidence vozidel
    public const WAGES = 17; // Wages                                               | Mzdy
    public const OTHER_RECEIVABLES = 18; // Other receivables                       | Ostatní pohledávky
    public const OTHER_COMMITMENTS = 19; // Other commitments                       | Ostatní závazky
    public const STOCKS = 20; // Stocks                                             | Zásoby
    public const STOCK_KITS = 21; // Stock kits                                     | Skladové soupravy
    public const PRICE_GROUPS = 22; // Price groups                                 | Cenové skupiny
    public const ACCESS_RIGHTS = 24; // Access rights                               | Přístupová práva
    public const HR = 25; // HR                                                     | Personalistika
    public const CASH_REGISTER = 27; // Cash register                               | Pokladna
    public const BANKA = 28; // Banka                                               | Banka
    public const INTERNAL_DOCUMENTS = 29; // Internal documents                     | Interní doklady
    public const DISPOSAL = 30; // Disposal                                         | Likvidace
    public const FINANCIAL_DIARY = 31; // Financial Diary                           | Účetní deník
    public const CHART_OF_ACCOUNTS = 32; // Chart of accounts                       | Účtová osnova
    public const ADVANCE_PAYMENT = 33; // Advance payment                           | Předkontace
    public const BANK_CODES = 34; // Bank codes                                     | Kódy bank
    public const NUMBER_SERIES = 35; // Number series                               | Číselné řady
    public const CONSTANT_SYMBOLS = 36; // Constant symbols                         | Konstantní symboly
    public const ACTIVITIES = 37; // Activities                                     | Činnosti
    public const CENTERS = 38; // Centers                                           | Střediska
    public const ORDERS = 39; // Orders                                             | Zakázky
    public const VAT_BREAKDOWN = 40; // VAT breakdown                               | Členění DPH
    public const BANK_ACCOUNTS = 41; // Bank accounts                               | Bankovní účty
    public const USER_SETTINGS = 42; // User settings                               | Uživatelské nastavení
    public const ADVANCE_INVOICES_ISSUED = 43; // Advance invoices issued           | Vydané zálohové faktury
    public const ADVANCE_INVOICES_RECEIVED = 44; // Advance invoices received       | Přijaté zálohové faktury
    public const ACCOUNTING_UNITS = 45; // Accounting units                         | Účetní jednotky
    public const MUNICIPALITY_AND_ZIP_CODE = 46; // Municipality and zip code       | Obce a PSČ
    public const GLOBAL_SETTINGS = 47; // Global settings                           | Globální nastavení
    public const COUNTRY = 48; // Country                                           | Země
    public const GROUPS = 49; // Groups                                             | Skupiny
    public const KEYS = 50; // Keys                                                 | Klíče
    public const LIABILITIES = 51; // Liabilities                                   | Závazky
    public const SALE_PRICES = 52; // Sale prices                                   | Prodejní ceny
    public const DELIVERY = 53; // Delivery                                         | Výdej
    public const INCOME = 54; // Income                                             | Příjem
    public const MOVES = 55; // Moves                                               | Pohyby
    public const HEALTH_INSURANCE = 56; // Health insurance                         | Zdravotní pojišťovny
    public const WAREHOUSES = 57; // Warehouses                                     | Sklady
    public const DIVISION_OF_WAREHOUSES = 58; // Division of warehouses             | Členění skladů
    public const ADVANCE_PAY = 59; // Advance payment                               | Předkontace
    public const PROPERTY_LOCATION = 60; // Property location                       | Umístění majetku
    public const DEPRECIATION_PLANS = 61; // Depreciation plans                     | Odpisové plány
    public const ITEMS = 62; // Items                                               | Položky
    public const INITIAL_ACCOUNT_BALANCES = 63; // Initial account balances         | Počáteční stavy účtů
    public const DEFAULT_ACCOUNT_STATUSES = 64; // Default Account Statuses         | Výchozí stavy účtů
    public const LIST_OF_DRIVERS = 65; // List of drivers                           | Seznam řidičů
    public const INITIAL_BALANCES = 69; // Initial balances                         | Počáteční stavy salda
    public const HOME_BANKING = 71; // Home banking                                 | Homebanking
    public const FOREIGN_CURRENCIES = 72; // Foreign currencies                     | Cizí měny
    public const COURSE_TICKET = 75; // Course ticket                               | Kursový lístek
    public const VAT_RETURN = 76; // VAT return                                     | Přiznání DPH
    public const CASH_REGISTERS = 77; // Cash registers                             | Hotovostní pokladny
    public const ANALYSIS = 78; // Analysis                                         | Analýza
    public const LEASED_PROPERTY = 79; // Leased property                           | Leasingový majetek
    public const HARDWARE = 80; // Hardware                                         | Hardware
    public const BALANCE = 81; // Balance                                           | Saldo
    public const LAST_YEARS_STATE_OF_PROFIT_AND_LOSS_ACCOUNTS = 82; // Last year's state of profit and loss accounts | Loňský stav výsledkových účtů
    public const UNITS_OF_MEASURE = 83; // Units of measure                         | Měrné jednotky
    public const PENSION_FUNDS = 84; // Pension funds                               | Penzijní fondy
    public const LEGISLATION = 85; // Legislation                                   | Legislativa
    public const ONLINE_STORES = 86; // Online stores                               | Internetové obchody
    public const PRODUCTION_NUMBERS = 88; // Production numbers                     | Výrobní čísla
    public const LIFE_INSURANCE_COMPANIES = 89; // Life insurance companies         | Životní pojišťovny
    public const CASHIERS = 90; // Cashiers                                         | Kasy
    public const STOCK_TAKING = 91; // Stock-taking                                 | Inventura
    public const OFFERS = 92; // Offers                                             | Nabídky
    public const EVENTS = 93; // Events                                             | Události
    public const BRANCHES = 94; // Branches                                         | Pobočky
    public const NONMONETARY_DIARY = 96; // Non-monetary diary                      | Nepeněžní deník
    public const REQUESTS = 97; // Requests                                         | Poptávky
    public const LAST_YEARS_STATEMENTS = 98; // Last year's statements              | Výkazy minulého roku

    /**
     * SetUp Object to be ready for connect
     *
     * @param array $options Object Options (dbType,server,username,password,database,
     *                                       port,connectionSettings,myTable,debug)
     */
    public function setUp($options = [])
    {
        $this->setKeyColumn(array_key_exists('ID', $this->struct) ? 'ID' : null);
        $this->createdColumn = array_key_exists('DatCreate', $this->struct) ? 'DatCreate' : null;
        $this->lastModifiedColumn = array_key_exists('DatSave', $this->struct) ? 'DatSave' : null;
        $this->nameColumn = array_key_exists('IDS', $this->struct) ? 'IDS' : null;
        parent::setUp($options);
        $this->setObjectName();
    }

    /**
     * Set data filed value
     *
     * @param string $columnName název datové kolonky
     * @param mixed  $value      hodnota dat
     *
     * @return bool Success
     */
    public function setDataValue($columnName, $value)
    {
        return array_key_exists($columnName, $this->struct) ? parent::setDataValue(
            $columnName,
            $value
        ) : new \Exception('Unknown field ' . $columnName);
    }

    /**
     * Record ID
     *
     * @return int
     */
    public function getID()
    {
        return (int) $this->getDataValue('ID');
    }

    /**
     * Record identification string
     *
     * @return string
     */
    public function getIDS()
    {
        return $this->getDataValue('IDS');
    }
}
