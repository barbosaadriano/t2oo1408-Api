<?php

require_once '../myApp/src/Core/HelloWorld.php';
require_once '../myApp/src/Core/Router.php';

$rota = $_SERVER['REQUEST_URI'];

myApp\Core\Router::createRoute("/do", function(){
    $f = new myApp\Core\HelloWorld();
    $f->doSomeThing();
});

myApp\Core\Router::createRoute("/else", function(){
    $f = new myApp\Core\HelloWorld();
    $f->doSomeThingElse();
});

myApp\Core\Router::executeRoute($rota);


