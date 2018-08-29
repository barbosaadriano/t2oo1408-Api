<?php

namespace MyCode\Models;

class User {

    private $id;
    private $login;
    private $password;
    private $status;

    function getId() {
        return $this->id;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}
