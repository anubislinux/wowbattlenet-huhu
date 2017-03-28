<?php

namespace vendor\core;

class Loader {

    public static function autoLoad() {
        spl_autoload_register(function($class){
            $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
            if(is_file($file)){
                require_once $file;
            }
        });
    }

}