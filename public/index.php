<?php

chdir(dirname(__DIR__));

if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (__FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}

require_once 'MyApp/autoload.php';


$route = $_SERVER['REQUEST_URI']; // define a url.

MyApp\Core\Router::createRoute("/do", function(){
    
    $f = new MyApp\Core\HelloWorld();
    $f->doSomething();
    
});

MyApp\Core\Router::createRoute("/else", function(){
    
    $f = new MyApp\Core\HelloWorld();
    $f->doSomethingElse();
    
});

MyApp\Core\Router::createRoute("/blah", function(){
    
    echo "Hi, I'm other route";
    
});

MyApp\Core\Router::createRoute("/", function(){
    
    $conn = MyApp\Services\Conexao::getInstance()->getPdo(); 
    
    $dao = new \MyApp\Dao\DaoUser($conn); 
    $dao->getAllUser(); 
    echo "Hi, Wellcome";
    
});

MyApp\Core\Router::executeRoute($route);

?>