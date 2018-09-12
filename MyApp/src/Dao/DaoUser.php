<?php

namespace MyApp\Dao;

use MyApp\Models\User;
use PDO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoUser
 *
 * @author thiag
 */
class DaoUser {

    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function getAllUsers() {
        $sql ="select * from tbl_caixa";
        
        $prepare = $this->conn->prepare($sql);
        $prepare->execute();
        $array = $prepare->fetchAll();
        
        var_dump($array);
    }

    public function getById($id) {
        
    }

    public function save(User $u) {
        
    }

    public function remove(User $u) {
        
    }

}
