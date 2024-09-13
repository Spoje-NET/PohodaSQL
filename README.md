PohodaSQL
=========

![PohodaSQL](pohodaSQL.svg?raw=true)

[![PHP Version](https://img.shields.io/badge/php-%3E%3D%207.2-8892BF.svg)](https://php.net/)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Composer](https://img.shields.io/badge/composer-supported-885630.svg)](https://getcomposer.org/)
[![Debian Package](https://img.shields.io/badge/debian-package-red.svg)](http://repo.vitexsoftware.com/pool/main/p/php-spojenet-pohoda-sql/)

This is a PHP Library for direct access to Pohoda SQL database tables

Use at your own risk!

Requirements
------------

* PHP 7.2+
* php-sqlsrv
* php-ease-fluentpdo

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

Installation
------------

Composer is supported:

```shell
composer require spojenet/pohoda-sql
```

also debian package is availble:

```shell
wget -qO- https://repo.vitexsoftware.com/keyring.gpg | sudo tee /etc/apt/trusted.gpg.d/vitexsoftware.gpg
echo "deb [signed-by=/etc/apt/trusted.gpg.d/vitexsoftware.gpg]  https://repo.vitexsoftware.com  $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/vitexsoftware.list
sudo apt update

sudo apt install php-spojenet-pohoda-sql
````
