<?php

namespace vendor\libs;

class Cache {

    public function __construct() {

    }

    public function set($key, $data, $seconds = 3600) {
        $file = CACHE. '/' . md5($key) . '.tmp';
        $content['data'] = $data;
        $content['end_time'] = time() + $seconds;
        if(file_put_contents($file, serialize($content))) {
            return true;
        }
        return false;
    }

    public function get($key) {
        $file = CACHE. '/' . md5($key) . '.tmp';
        if(file_exists($file)) {
            $content = unserialize(file_get_contents($file));
            if(time() <= $content['end_time']) {
                return $content['data'];
            }
            unlink($file);
        }
        return false;
    }

    public function delete($key) {
        $file = CACHE. '/' . md5($key) . '.tmp';
        if(file_exists($file)) {
            unlink($file);
        }
    }
}