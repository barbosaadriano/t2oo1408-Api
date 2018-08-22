<?php

require_once '../MyApp/src/Core/HelloWorld.php';
require_once '../MyApp/src/Core/Router.php';

$meuHello = new MyApp\Core\HelloWorld();


$rota = $_SERVER['REQUEST_URI'];

MyApp\Core\Router::createRoute("/do", function() {
    $f = new MyApp\Core\HelloWorld();
    $f->doSomething();
});
MyApp\Core\Router::createRoute("/else", function() {
    $f = new MyApp\Core\HelloWorld();
    $f->doSomethingElse();
});

MyApp\Core\Router::executeRout($rota);
        
