<?php

namespace controllers;

class HomeController extends Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function home(){
       
        $this->loadModel("user", "User");

        $users = $this->user->getAll();

        $this->data("seoDescription", "Самый лучший сайт");
        $this->data("result", $result);
        $this->data("users", $users);
        $this->data("template", "home");
        $this->display("index");
    }

    public function section(){
        echo "section";
        $this->data("template", "section");
        $this->data("seoDescription", "section Самый лучший сайт");
        $this->display("index");
    }
    
    public function products(){
        $this->data("seoDescription", "Товары");
        $this->loadModel("product", "Product");
        
        $products = $this->product->getAll();
        
        $this->data("result", $result);
        $this->data("products", $products);
        $this->data("template", "products");
        $this->display("index");
    }
}