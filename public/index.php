<?php

chdir(dirname(__DIR__));
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (__FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}

require_once 'MyApp/AutoLoad.php';

$meuHello = new MyApp\Core\HelloWorld();

$rota = $_SERVER['REQUEST_URI'];

MyApp\Core\Router::createRoute("/do",function(){
    $f = new MyApp\Core\HelloWorld();
    $f->doSomethingElse();
    
    });
    MyApp\Core\Router::createRoute("/else", function(){
         $f = new MyApp\Core\HelloWorld();
         $f->doSomethingElse();
    });
    MyApp\Core\Router::createRoute("/blah",function(){
    echo "Oi eu sou outra rota!";
    });
     
    MyApp\Core\Router::createRoute("/",function(){
        
    //   $conn = new PDO("mysql:host=localhost; port=3306; dbname=singleton",
                //    "root", "",
              //  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
       $conn = \MyApp\Services\Singleton::getInstance()->getPdo();
       
        $dao = new MyApp\dao\DaoUser($conn);
        $dao->getAllUsers();
        echo "Welcome";
    });
    
  MyApp\Core\Router::executeRoute($rota);

    