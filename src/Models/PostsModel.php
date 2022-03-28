<?php

namespace Blog\Models;

class PostsModel extends Model implements ModelInterface {

    public static function instance() {
        return new self();
    }

    public function getAll()
    {
        $query = $this->db->query('SELECT * FROM posts');
        $query->execute();
        return $query->fetchAll();
    }

    public function getById(int $id)
    {
        $query = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }

    public function getByCategory(string $category)
    {
        $query = $this->db->prepare('SELECT * FROM posts WHERE category = :category');
        $query->bindParam(':category', $category);
        $query->execute();
        return $query->fetchAll();
    }

}
