<?php

namespace Example;

use Dotenv\Dotenv;

define('EASE_LOGGER', 'syslog|console');

require_once dirname(__DIR__).'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$invoicer = new \SpojeNet\PohodaSQL\Faktura();

$invoicesRaw = $invoicer->getAll();

print_r($invoicesRaw);
