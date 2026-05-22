PohodaSQL
=========

![PohodaSQL](pohodaSQL.svg?raw=true)

[![PHP Version](https://img.shields.io/badge/php-%3E%3D%207.2-8892BF.svg)](https://php.net/)
![CodeRabbit Pull Request Reviews](https://img.shields.io/coderabbit/prs/github/Spoje-NET/PohodaSQL?utm_source=oss&utm_medium=github&utm_campaign=Spoje-NET%2FPohodaSQL&labelColor=171717&color=FF570A&link=https%3A%2F%2Fcoderabbit.ai&label=CodeRabbit+Reviews)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Composer](https://img.shields.io/badge/composer-supported-885630.svg)](https://getcomposer.org/)
[![Debian Package](https://img.shields.io/badge/debian-package-red.svg)](http://repo.vitexsoftware.com/pool/main/p/php-spojenet-pohoda-sql/)
[![Latest Stable Version](http://poser.pugx.org/spojenet/pohoda-sql/v)](https://packagist.org/packages/spojenet/pohoda-sql) [![Total Downloads](http://poser.pugx.org/spojenet/pohoda-sql/downloads)](https://packagist.org/packages/spojenet/pohoda-sql) [![Latest Unstable Version](http://poser.pugx.org/spojenet/pohoda-sql/v/unstable)](https://packagist.org/packages/spojenet/pohoda-sql) [![License](http://poser.pugx.org/spojenet/pohoda-sql/license)](https://packagist.org/packages/spojenet/pohoda-sql) [![PHP Version Require](http://poser.pugx.org/spojenet/pohoda-sql/require/php)](https://packagist.org/packages/spojenet/pohoda-sql)

This is a PHP Library for direct access to Pohoda SQL database tables.
Struct definitions are kept in sync with a live Pohoda SQL database (`StwPh_12345678_2026` on SQL Server Express).

Use at your own risk!

Available Classes
-----------------

| Class | Table | Description |
|---|---|---|
| `Adresar` | `AD` | Address book |
| `BankovniVypis` | `BV` | Bank statement |
| `BankovniVypisPol` | `BVpol` | Bank statement line item |
| `CasoveRozliseni` | `CasRoz` | Time resolution |
| `CasoveRozliseniPol` | `CasRozPol` | Time resolution line item |
| `CiselnaRada` | `sCRady` | Number series |
| `DOC` | `DOC` | Document attachments |
| `Faktura` | `FA` | Issued/received invoices |
| `FakturaPolozka` | `FApol` | Invoice line items |
| `HotovostniOperace` | `HO` | Cash document |
| `HotovostniOperacePol` | `HOpol` | Cash document line item |
| `Majetek` | `IM` | Fixed assets |
| `MajetkoveOperace` | `IMpohyb` | Asset movements |
| `Nabidka` | `NAB` | Offer |
| `NabidkaPol` | `NABpol` | Offer line item |
| `ObjednavkaPrijata` | `OBJ` | Received order |
| `ObjednavkaPrijataPol` | `OBJpol` | Received order line item |
| `OdpisovyPlan` | `sIMO` | Depreciation plans |
| `Pokladna` | `PH` | Cash register document |
| `PokladnaPol` | `PHpol` | Cash register line item |
| `Predkontace` | `pPK` | Pre-accounting |
| `Predmet` | `IMpredm` | Asset subjects |
| `Uhrada` | `Uhrady` | Payment |
| `Zamestnanec` | `ZAM` | Employee |
| `Zasilka` | `Zasilky` | Shipment |
| `ZasilkaPol` | `ZasilkyPol` | Shipment line item |

Requirements
------------

* PHP 7.2+
* php-sqlsrv
* php-ease-fluentpdo


Composer
--------

```shell
composer require spojenet/pohoda-sql
```

Configuration
-------------

Please set up this constants or environment variables:

* `DB_TYPE`      We use sqlsrv
* `DB_HOST`      IP or Hostname machine with SQL Server
* `DB_PORT`      default is 1433
* `DB_DATABASE`  something like StwPh_01234567_2019
* `DB_USERNAME`  sqlserver login
* `DB_PASSWORD`  sqlserver pass
* `DB_SETTINGS`  eg. encrypt=false

Usage
-----

### Load a record by ID

```php
$addr = new Adresar(234);
echo $addr->getDataValue('Firma'); // company name
```

### Load by a field value

```php
$addr = new Adresar(['ICO' => '69438676']);
echo $addr->getDataValue('Email');
```

### Override the database at instantiation

```php
$addr = new Adresar(234, ['database' => 'StwPh_01234567_2020']);
```

### Read invoice header and its line items

```php
$invoice = new Faktura(1001);
echo $invoice->getDataValue('Cislo');   // document number
echo $invoice->getDataValue('KcCelkem'); // total amount

$lines = new FakturaPolozka();
$rows  = $lines->getColumnsFromSQL(['Nazev', 'Mnozstvi', 'KcCena'], ['RefAg' => 1001]);
foreach ($rows as $row) {
    echo $row['Nazev'] . ' × ' . $row['Mnozstvi'] . ' = ' . $row['KcCena'] . PHP_EOL;
}
```

### List all addresses with a credit limit

```php
$addr = new Adresar();
$rows = $addr->getColumnsFromSQL(['Cislo', 'Firma', 'ADKreditMax'], ['ADKreditMax>' => 0]);
foreach ($rows as $row) {
    printf("%s  %s  (limit: %s)\n", $row['Cislo'], $row['Firma'], $row['ADKreditMax']);
}
```

### Work with bank statements

```php
$bv  = new BankovniVypis(['Cislo' => 'BV2024001']);
$pol = new BankovniVypisPol();
$items = $pol->getColumnsFromSQL(['KcCastka', 'VS', 'Datum'], ['RefBV' => $bv->getMyKey()]);
```

### Iterate shipments

```php
$zasilky = new Zasilka();
$list    = $zasilky->getColumnsFromSQL(['ID', 'Cislo', 'RefAD', 'DatOdeslani']);
foreach ($list as $z) {
    echo $z['Cislo'] . ' – ' . $z['DatOdeslani'] . PHP_EOL;
}
```

### Access employees

```php
$zam = new Zamestnanec(['RodCisl' => '8001011234']);
echo $zam->getDataValue('Prijmeni') . ' ' . $zam->getDataValue('Jmeno');
```

### Attach a URL link to a Pohoda document

The `DOC` table stores document attachments for every agenda. Use `urlAttachment()` to link
an external URL (e.g. a SharePoint file, a web invoice, a tracking page) to an existing record.
The second argument is the Pohoda internal document ID; the agenda type is identified by one of
the `Agenda::*` constants.

```php
use SpojeNet\PohodaSQL\Agenda;
use SpojeNet\PohodaSQL\DOC;

// Attach a SharePoint link to a bank statement (agenda = Agenda::BANK = 28)
$doc = new DOC();
$doc->setDataValue('RelAgID', Agenda::BANK);
$doc->urlAttachment(
    pohodaId: 303,                                          // DOC.RelID – internal Pohoda record ID
    url: 'https://sharepoint.example.com/statements/BV2024001.pdf',
    name: 'BV2024001.pdf',                                 // display name shown in Pohoda
);

// Attach a link to an issued invoice (agenda = Agenda::ISSUED_INVOICES = 2)
$doc = new DOC();
$doc->setDataValue('RelAgID', Agenda::ISSUED_INVOICES);
$doc->urlAttachment(1001, 'https://portal.example.com/invoice/1001', 'Invoice PDF');
```

Available `Agenda::*` constants mirror the `RelCrAg` values from `sCRady`:

| Constant | Value | Agenda |
|---|---|---|
| `Agenda::ISSUED_INVOICES` | 2 | Issued invoices |
| `Agenda::RECEIVED_INVOICES` | 3 | Received invoices |
| `Agenda::ORDERS_RECEIVED` | 11 | Received orders |
| `Agenda::CASH_REGISTER` | 27 | Cash register |
| `Agenda::BANK` | 28 | Bank statements |

See https://github.com/VitexSoftware/php-ease-fluentpdo for more information.

Debian Package
--------------

also package for debian/ubuntu is availble:

```shell
wget -qO- https://repo.vitexsoftware.com/KEY.gpg | sudo tee /etc/apt/trusted.gpg.d/vitexsoftware.gpg
echo "deb [signed-by=/etc/apt/trusted.gpg.d/vitexsoftware.gpg]  https://repo.vitexsoftware.com  $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/vitexsoftware.list
sudo apt update

sudo apt install php-spojenet-pohoda-sql
````
