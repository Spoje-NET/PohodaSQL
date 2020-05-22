<?php

namespace Example;

use Dotenv\Dotenv;

define('EASE_LOGGER', 'syslog|console');

require_once dirname(__DIR__).'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$address = new \SpojeNet\PohodaSQL\Adresar();

$address->dbsync(['ID' => 1, 'Obec' => 'Praha']);

print_r($address->getData());
