<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyApp\Core;

/**
 * Description of Router
 *
 * @author refra
 */
class Router {
    private static $rotas = [];
    
    public static function createRoute($rota,$callable){
        if (isset(self::$rotas[$rota])){
            throw new \Exception("A rota ja existe!");
        }
        self::$rotas[$rota] = $callable;
        
    }
    public static function executeRoute($request){
        if(isset(self::$rotas[$request])){
            return call_user_func(self::$rotas[$request]);
            
        }
        
        
    }
}

