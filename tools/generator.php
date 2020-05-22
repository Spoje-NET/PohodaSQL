<?php

use Dotenv\Dotenv;
use tools\Prober;

define('EASE_LOGGER', 'syslog|console');

require_once dirname(__DIR__).'/vendor/autoload.php';
require_once './Prober.php';


$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$prober = new Prober();


foreach ($prober->getTables() as $table) {
    $prober->saveClass($table);
}
