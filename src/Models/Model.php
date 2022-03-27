<?php

namespace Blog\Models;

class Model {

    protected \PDO $db;

    public function __construct()
    {
       $this->db = new \PDO('mysql:host=localhost;dbname=blog', 'root', '');
    }

    public static function get(string $name)
    {
        $class = ucfirst($name) . 'Model';

        if (class_exists($class)) {
            return new $class();
        }

        return null;
    }

}
