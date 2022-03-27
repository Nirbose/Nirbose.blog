<?php

namespace Blog\Controllers;

use Blog\Models\PostsModel;

class PostsController extends Controller {

    public function all() {
        return $this->JsonWrite(PostsModel::instance()->all());
    }

}
