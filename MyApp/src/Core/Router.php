<?php



namespace MyApp\Core;

/**
 * Description of Router
 *
 * @author thiag
 */
class Router {
    
    private static $rotas = [];
    
    public static function createRoute($rota,$callabe){
       if (isset(self::$rotas[$rota]) ) {
          throw new \Exception("A Rota já Existe");
       } 
       
       self::$rotas[$rota] = $callabe;
    }
    
    public static function executeRout($request) {
       if (isset(self::$rotas[$request])) {
           return call_user_func(self::$rotas[$request]);
       } 
    }
}
