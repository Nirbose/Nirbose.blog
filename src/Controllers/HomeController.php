<?php

namespace Blog\Controllers;

class HomeController extends Controller {
    
    public function index() {
        $posts = $this->request->get($_SERVER['HTTP_HOST'] . '/api/posts');
        var_dump((string)$posts->getBody());
        echo "test";
    }

}
