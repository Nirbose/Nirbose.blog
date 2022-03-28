<?php

namespace Blog\Controllers;

use Blog\App;

class HomeController extends Controller {
    
    public function index() {
        $posts = $this->request->get('/api/posts');
        
        $json = json_decode($posts->getBody());
        App::view('home', ['posts' => $json]);
    }

    public function post(int $id) {
        $post = $this->request->get('/api/posts/' . $id);

        $json = json_decode($post->getBody());
        App::view('post', ['post' => $json]);
    }

}
