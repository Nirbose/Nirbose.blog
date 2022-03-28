<?php

/**
 * Routes for the API module
 */

use Router\Router;

Router::get('/posts', 'Blog\Controllers\Api\PostsController@all');
