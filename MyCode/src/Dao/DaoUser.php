<?php

namespace MyCode\Dao;

use MyCode\Models\User;
use PDO;

class DaoUser {

    private $conn;

    public function __construct(PDO $conn) {
    
        $this->conn = $conn;
        
    }

    public function getAllUsers() {
        
        
        
    }
    
    public function getByID($id) {
        
        
        
    }
    
    public function save(User $u) {
        
        
        
    }
    
    public function remove(User $u) {
     
        
        
    }
    
}
