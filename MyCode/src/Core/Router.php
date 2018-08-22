<?php

namespace MyCode\Core;

class Router {

    private static $routes = [];

    public static function createRoute($route, $callable) {

        if (isset(self::$routes[$route])) {
            throw new Exception("A rota já existe!");
        }
        self::$routes[$route] = $callable;
    }

    public static function executeRoute($request) {

        if (isset(self::$routes[$request])) {

            return call_user_func(self::$routes[$request]);
        }
    }

}
