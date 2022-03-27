<?php

use Illuminate\Database\PDO\Connection;
use Router\Router;

define('ROOT', dirname(__DIR__));

require_once ROOT . '/vendor/autoload.php';

Router::get('/', 'Blog\Controllers\HomeController@index');

Router::group('/api', function () {
    include ROOT . '/routes/api.php';
});
