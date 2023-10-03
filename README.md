PohodaSQL
=========

PHP Librabry for direct access to Pohoda SQL database tables

Use at your own risk!

Requirements
------------

* PHP 7.2+
* php-sqlsrv
* php-ease-fluentpdo

Configuration
-------------

Please set up this constants or environment variables:

* DB_TYPE      We use sqlsrv
* DB_HOST      IP or Hostname machine with SQL Server
* DB_PORT      default is 1433
* DB_DATABASE  something like StwPh_01234567_2019
* DB_USERNAME  sqlserver login
* DB_PASSWORD  sqlserver pass

You can also int object like this:

```php
$addr = new Adresar(234,['database'=>'StwPh_01234567_2020']); //Load record by ID from overriden Database
$addr = new Adresar(['ICO'=>'69438676']); //Load record by ICO
```

See https://github.com/VitexSoftware/php-ease-fluentpdo for mor informations
