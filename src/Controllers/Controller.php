<?php

namespace Blog\Controllers;

use GuzzleHttp\Client;

class Controller
{

    protected Client $request;

    public function __construct()
    {
        $this->request = new Client([
            'base_uri' => $_SERVER['HTTP_HOST'],
        ]);
    }

    public function json(array $data, ?int $code = 200)
    {
        header('Content-Type: application/json', true, $code);
        echo json_encode($data);
    }
    
}
