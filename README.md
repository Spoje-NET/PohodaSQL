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

You can also int object like this:

```php
$addr = new Adresar(234,['database'=>'StwPh_01234567_2020']); //Load record by ID from overriden Database
$addr = new Adresar(['ICO'=>'69438676']); //Load record by ICO
```

See https://github.com/VitexSoftware/php-ease-fluentpdo for mor informations

Debian Package
--------------

also package for debian/ubuntu is availble:

```shell
wget -qO- https://repo.vitexsoftware.com/keyring.gpg | sudo tee /etc/apt/trusted.gpg.d/vitexsoftware.gpg
echo "deb [signed-by=/etc/apt/trusted.gpg.d/vitexsoftware.gpg]  https://repo.vitexsoftware.com  $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/vitexsoftware.list
sudo apt update

sudo apt install php-spojenet-pohoda-sql
````
