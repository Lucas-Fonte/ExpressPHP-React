<?php

namespace App\Controller;

class TestController {

    public function index(){
        return json_encode(["ok"=>true]);
    }
}