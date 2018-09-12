<?php

namespace MyCode\Services;

class Singleton {

    /**
     *
     * @var Conexao
     */
    private static $instance;
    private $pdo;

    private function __construct() {
        $this->pdo = new \PDO("mysql:host=localhost; port=3306; dbname=singleton", //
                "root", "enju", //
                array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public function getPDO() {
        return $this->pdo;
    }

    public static function getInstance() {

       if (!self::$instance) {
           self::$instance = new Singleton();
       } 
       return self::$instance;
        
    }

}
