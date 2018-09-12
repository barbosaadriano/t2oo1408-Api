<?php

namespace MyApp\Core;

class Router {
    
    private static $routes = [];
    
    public static function createRoute($rota,$callable){
          
        if (isset(self::$routes[$rota])) {
              throw new \Exception("The route is exist!");  // se a rota ja existe vai dar erro   
        }
        self::$routes[$rota] = $callable; 
    }
    
    public static function executeRoute($request){
        
        if (isset(self::$routes[$request])) {
         return call_user_func(self::$routes[$request]);
        }
        
    }
    
}
