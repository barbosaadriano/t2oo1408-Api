<?php

namespace MyApp; 

spl_autoload_register(function($class){
    
   // prefixo do espaço de nomes específico do projeto 
$prefix = 'MyApp\\';      

    // diretório base para o prefixo do namespace 
$base_dir = __DIR__ . '/src/';        

    // a classe usa o prefixo do namespace? 
$len = strlen($prefix); 
if (strncmp($prefix , $class , $len ) !==0 ) { 
// não, passa para o próximo retorno do autoloader registrado ;   
    return;  }      
 
    // obtém o nome da classe relativa 
$relative_class = substr($class, $len );      

    // substitua o prefixo do espaço de nomes pelo diretório base, substitua o namespace 
// //separadores por separadores de diretório no nome da classe relativa, acrescente com .php 
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';    
 
    // se o arquivo existir, exija 
if (file_exists($file)) {
    require $file ;     }
    

});

