<?php

use Blog\Controllers\HomeController;
use Router\Router;

Router::get('/', [HomeController::class, 'index']);
