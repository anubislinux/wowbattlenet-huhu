<?php

session_start();

error_reporting(-1);

use vendor\core\{Router, Loader, App};
use vendor\libs\Lang;

$query = rtrim($_SERVER['QUERY_STRING'], '/');

define('WWW', __DIR__);
define('ROOT', dirname(__DIR__));
define('CORE', dirname(__DIR__) . '/vendor/core');
define('LIBS', dirname(__DIR__) . '/vendor/libs');
define('LANG', dirname(__DIR__) . '/vendor/lang/');
define('CFG', dirname(__DIR__) . '/config');
define('APP', dirname(__DIR__) . '/app');
define('LOGS', dirname(__DIR__) . '/logs');
define('CACHE', dirname(__DIR__) . '/tmp/cache');
define('LAYOUT', 'default');

require_once CORE . '/Loader.php';
Loader::autoLoad();

new \vendor\core\App;
new \vendor\libs\DB;

$locale = $_COOKIE['locale'] ?? App::$app->config->setConfig('default_lang');
if(!isset($_COOKIE['locale'])) {
    setcookie('locale', $locale, strtotime('NEXT YEAR'), '/');
    $_COOKIE['locale'] = $locale;
}
Lang::load($locale);

require_once CFG . '/route.php';

Router::dispatch($query);