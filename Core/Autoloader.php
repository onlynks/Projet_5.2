<?php

namespace Core;

class Autoloader {

    public static function autoload() {
    
        spl_autoload_register(array(__CLASS__, "myAutoload"));
    }
    
    public static function myAutoload($class) {
        
        $path = str_replace("\\", "/", $class);
      
        
        include APP_PATH . "/" . $path . ".php";
    }
}
