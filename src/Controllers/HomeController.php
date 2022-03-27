<?php

namespace Blog\Controllers;

use Blog\App;

class HomeController extends Controller {
    
    public function index() {
        $posts = $this->request->get($_SERVER['HTTP_HOST'] . '/api/posts');
        
        $json = json_decode($posts->getBody());
        App::view('home', ['posts' => $json]);
    }

}
