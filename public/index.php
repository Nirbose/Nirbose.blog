<?php

use Illuminate\Database\PDO\Connection;
use Router\Router;

define('ROOT', dirname(__DIR__));

require_once ROOT . '/vendor/autoload.php';

Router::group('/', function () {
    include ROOT . '/routes/web.php';
});

Router::group('/api', function () {
    include ROOT . '/routes/api.php';
});
