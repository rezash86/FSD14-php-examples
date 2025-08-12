<?php
require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('my_app');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
$log->warning('This is a warning message.');
