<?php

namespace Blog\Controllers\Api;

use Blog\Controllers\Controller;
use Blog\Models\PostsModel;

/**
 * Class PostsController - handles all API requests for posts
 * 
 */
class PostsController extends Controller {

    /**
     * @var PostsModel
     */
    private $postsModel;

    /**
     * PostsController constructor.
     * 
     * @return void
     */
    public function __construct() {
        $this->postsModel = PostsModel::instance();
    }

    /**
     * Returns all posts
     * 
     * @return void
     */
    public function all() {
        $posts = $this->postsModel->getAll();

        $this->json($posts);
    }

}
