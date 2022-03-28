<?php

use Blog\Controllers\HomeController;
use Router\Router;

Router::get('/', [HomeController::class, 'index']);
Router::get('/posts/{id}', [HomeController::class, 'post']);
