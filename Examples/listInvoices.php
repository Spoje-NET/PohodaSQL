<?php

namespace Example;

use Dotenv\Dotenv;

define('EASE_LOGGER', 'syslog|console');

require_once dirname(__DIR__).'/vendor/autoload.php';

\Ease\Shared::init(['DB_CONNECTION','DB_HOST','DB_PORT','DB_DATABASE','DB_USERNAME','DB_PASSWORD'],dirname(__DIR__).'.env');

$invoicer = new \SpojeNet\PohodaSQL\Faktura();

$invoicesRaw = $invoicer->getAll();

print_r($invoicesRaw);
