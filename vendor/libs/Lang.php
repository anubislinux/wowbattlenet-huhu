<?php

namespace vendor\libs;

class Lang {

    protected static $data;

    public static function load($lang_code) {
        $lang_file_path = LANG . strtolower($lang_code) . '.php';

        if(file_exists($lang_file_path)) {
            self::$data = require_once($lang_file_path);
        } else {
            self::$data = require_once(LANG . 'en.php');
        }
    }

    public static function get($key, $default_value = '') {
        return self::$data[strtolower($key)] ?? $default_value;
    }

}