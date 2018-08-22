<?php

require_once '../MyCode/src/Core/HelloWorld.php';
require_once '../MyCode/src/Core/Router.php';
    
$route = $_SERVER['REQUEST_URI'];

MyCode\Core\Router::createRoute("/do", function() {

    $p = new \MyCode\Core\HelloWorld();
    $p->doSomething();
    
});
MyCode\Core\Router::createRoute("/else", function() {

    $p = new \MyCode\Core\HelloWorld();
    $p->doSomethingElse();
    
});
MyCode\Core\Router::createRoute("/autor", function() {

    echo "by: Pedro Henrique Masato Enju";
    
});

MyCode\Core\Router::executeRoute($route);