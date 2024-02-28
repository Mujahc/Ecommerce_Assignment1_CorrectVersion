<?php

namespace app\controllers;

class Count extends \app\core\Controller{
    public function index(){
        $this->view('Count/index');
    }
}