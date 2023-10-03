<?php

namespace Example;

define('EASE_LOGGER', 'syslog|console');

require_once dirname(__DIR__).'/vendor/autoload.php';

\Ease\Shared::init(['DB_CONNECTION','DB_HOST','DB_PORT','DB_DATABASE','DB_USERNAME','DB_PASSWORD'],dirname(__DIR__).'.env');

$address = new \SpojeNet\PohodaSQL\Adresar();

$address->dbsync(['ID' => 1, 'Obec' => 'Praha']);

print_r($address->getData());
