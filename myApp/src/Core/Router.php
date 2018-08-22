<?php
namespace myApp\Core;

/**
 * Description of Router
 *
 * @author Usuario
 */
class Router {
    
    private static $rotas = [];
    
    public static function createRoute($rota,$callable){
        if (isset(self::$rotas [$rota])) {
            throw new Exception("A rota ja exixte!");
        }
        self::$rotas[$rota] = $callable;
    }
    
    public static function executeRoute($request){
        if (isset(self::$rotas[$request])) {
            return call_user_func(self::$rotas[$request]);
        }
    }
    
}
