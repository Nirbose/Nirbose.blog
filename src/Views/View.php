<?php

namespace Blog\Views;

class View {

    public static function render(string $name, ?array $data = [])
    {
        extract($data);

        require_once ROOT . "/view/{$name}.php";
    }

    public static function component(string $name, ?array $data = [])
    {
        extract($data);

        require_once ROOT . "/view/components/{$name}.php";
    }
}
