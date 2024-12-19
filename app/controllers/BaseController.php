<?php

namespace bng\Controllers;

<<<<<<< HEAD
abstract class BaseController{
    public function view($view, $data = []){
        //check if data is array
        if(!is_array($data)){
            die('Data is not an array: '.var_dump($data));
        }

        //transforms data into variables
        extract($data);

        //incluides the file if exists
        if(file_exists("../app/views/$view.php")){
            require_once("../app/views/$view.php");
        } else {
            die("View does not exists: ".$view);
=======
abstract class BaseController
{
    public function view($view, $data = [])
    {
        // check if data is array
        if(!is_array($data)){
            die("Data is not an array: " . var_dump($data));
        }

        // transforms data into variables
        extract($data);

        // includes the file if exists
        if(file_exists("../app/views/$view.php")){
            require_once("../app/views/$view.php");
        } else {
            die("View não encontrada: " . $view);
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
        }
    }
}