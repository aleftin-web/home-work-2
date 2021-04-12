<?php

namespace controllers;

class Error extends Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function error(){
        $this->data("template", "404");
        $this->display("index");
    }
}

