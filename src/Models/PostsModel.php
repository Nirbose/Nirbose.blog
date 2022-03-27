<?php

namespace Blog\Models;

class PostsModel extends Model implements ModelInterface {

    public static function instance() {
        return new self();
    }

    public function all()
    {
        $query = $this->db->query('SELECT * FROM posts');
        $query->execute();
        return $query->fetchAll();
    }

}
