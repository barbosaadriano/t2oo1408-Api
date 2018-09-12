<?php

namespace MyApp\Dao; 

class DaoUser {
    /**
     *
     * @var /PDO 
     */
    // vai denominar a variavel abaixo sendo do tipo supracitado.
    private $conn; 


    public function __construct(\PDO $conn) {
        $this->conn = $conn;
    }
    
    public function getAllUser(){
        
        $sql = "select * from tbl_caixa"; 
        
        $prepare = $this->conn->prepare($sql); 
        $prepare->execute(); 
        
        $array = $prepare->fetchAll(); // seleciona todas as linhas da consulta. e retorna um array. 
        
        var_dump($array);         
        
    }
    
    public function getById($id){
        
        
    }
    
    public function save(\MyApp\Models\User $u){
        
        
    }
    
    public function remove(\MyApp\Models\User $u){
        
        
    }
    
}
