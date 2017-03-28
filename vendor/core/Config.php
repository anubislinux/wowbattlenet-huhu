<?php

namespace vendor\core;

class Config {

    protected static $objects = [];

    public function __construct() {
        require CFG . '/config.php';
        foreach($config['webconfig'] as $name => $component) {
            self::$objects[$name] = $component;
        }
    }

    public function setConfig($name) {
        return self::$objects[$name];
    }

}