<?php

namespace bng\Models;

use bng\System\Database;

<<<<<<< HEAD
abstract class BaseModel {
    public $db;

    public function db_connect(){
=======
abstract class BaseModel
{
    public $db;

    //--------------------------------------------------

    public function db_connect()
    {
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
        $options = [
            'host' => MYSQL_HOST,
            'database' => MYSQL_DATABASE,
            'username' => MYSQL_USERNAME,
            'password' => MYSQL_PASSWORD
        ];
        $this->db = new Database($options);
    }

<<<<<<< HEAD
    public function query($sql = "", $params = []){
        return $this->db->execute_query($sql, $params);
    }
=======
    //--------------------------------------------------

    public function query($sql = "", $params = [])
    {
        return $this->db->execute_query($sql, $params);
    }

    //----------------------------------------------------

    public function non_query($sql = "", $params = [])
    {
        return $this->db->execute_non_query($sql, $params);
    }
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
}