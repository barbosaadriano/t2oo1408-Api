<?php
namespace MyApp\Services;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author refra
 */
class Conexao {
    /**
     *
     * @var type 
     */
    private static $instance;
    private $pdo;
    
    private function __construct() {
       $this->pdo =  new \PDO("mysql:host=localhost; port=3306; dbname=singleton",
                    "root", "",
                array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
       
        
    }
    
    public function getPdo(){
        return $this->pdo;
        
    }
    public static function getinstance(){
        if(!self::$instance){
            self::$instance = new Conexao();
                    
            
        }
        return self::$instance;
        
        
    }
}
