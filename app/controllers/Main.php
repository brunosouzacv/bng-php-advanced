<?php

namespace bng\Controllers;

class Main {
    public function index(){
        echo "Estou dentro do controlador Main - index";
        echo "ok";
        teste();
    }

    public function teste(){
        die('aqui no teste');
    }
}