<?php

namespace Blog\Controllers;

use GuzzleHttp\Client;

class Controller
{

    protected Client $request;

    public function __construct()
    {
        $this->request = new Client();
    }

    public function JsonWrite(array $data)
    {
        header('Content-Type: application/json');
        return json_encode($data);
    }
    
}
