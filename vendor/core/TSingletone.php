<?php

namespace vendor\core;

trait TSingletone {

    protected static $instance;

    public static function instance() {
        if(self::$instance === NULL) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}