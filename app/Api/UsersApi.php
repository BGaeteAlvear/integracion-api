<?php

namespace App\Api;

class UsersApi extends GuzzleHttpRequest{

    public function login($username, $password){

        $data = ['form_params' => [
            'username' => $username,
            'password' => $password
        ]];

        return $this->post('login',$data);
    }

    public function getAll(){

        return $this->get('cliente');

    }

    public function getId($id){

        return $this->get("cliente/id/{$id}");

    }

    public function getRut($rut){

        return $this->get("cliente/rut/{$rut}");

    }

}