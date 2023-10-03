<?php

use tools\Prober;

define('EASE_LOGGER', 'syslog|console');

require_once dirname(__DIR__).'/vendor/autoload.php';
require_once './Prober.php';

\Ease\Shared::init(['DB_CONNECTION','DB_HOST','DB_PORT','DB_DATABASE','DB_USERNAME','DB_PASSWORD'],dirname(__DIR__).'.env');

$prober = new Prober();

foreach ($prober->getTables() as $table) {
    $prober->saveClass($table);
}
