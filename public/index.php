<?php

chdir(dirname(__DIR__));

if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (__FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}

require_once 'MyCode/autoload.php';

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
MyCode\Core\Router::createRoute("/", function() {
    echo "Everbody!!!";
});

MyCode\Core\Router::executeRoute($route);
