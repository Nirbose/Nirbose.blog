<?php

namespace Blog;

class App {
    
    public static function view(string $name, array $data = [])
    {
        extract($data);
        require ROOT . "/views/{$name}.php";
    }

}
