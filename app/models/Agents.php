<?php

namespace bng\Models;

use bng\Models\BaseModel;

<<<<<<< HEAD
class Agents extends BaseModel {
    public function get_total_agents(){
        $this->db_connect();
        return $this->query("SELECT COUNT(*) total FROM agents");
    }

    public function get_results(){
        $params = [
            'profile' => 'admin'
        ];
        $this->db_connect();
        return $this->query("SELECT * FROM agents WHERE profile = :profile", $params);    
=======
class Agents extends BaseModel
{
    //--------------------------------------------------------
    public function check_login($username, $password)
    {
        // check if the login is valid
        $params = [
            ':username' => $username
        ];

        // check if there is a user in the database
        $this->db_connect();
        $results = $this->query(
            "SELECT id, passwrd FROM agents " .
                "WHERE AES_ENCRYPT(:username, '" . MYSQL_AES_KEY . "') = name",
            $params
        );

        // if there is no user, returns false
        if ($results->affected_rows == 0) {
            return [
                'status' => false
            ];
        }

        // there is a user with that name (username)
        // check if the password is correct
        if (!password_verify($password, $results->results[0]->passwrd)) {
            return [
                'status' => false
            ];
        }

        // login is ok
        return [
            'status' => true
        ];
    }

    //----------------------------------------------------------------
    public function get_user_data($username)
    {
        // get all necessary user data to insert in the session
        $params = [
            ':username' => $username
        ];
        $this->db_connect();
        $results = $this->query(
            "SELECT " .
                "id, " .
                "AES_DECRYPT(name, '" . MYSQL_AES_KEY . "') name, " .
                "profile " .
                "FROM agents " .
                "WHERE AES_ENCRYPT(:username, '" . MYSQL_AES_KEY . "') = name",
            $params
        );

        return [
            'status' => 'success',
            'data' => $results->results[0]
        ];
    }

    public function set_user_last_login($id)
    {
        //updates the user´s last login
        $params = [
            ':id' => $id
        ];
        $this->db_connect();
        $results = $this->non_query(
            "UPDATE agents SET ".
            "last_login = NOW() ".
            "WHERE id = :id"
            , $params);
        return $results;
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
    }
}