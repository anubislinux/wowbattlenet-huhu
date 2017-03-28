<?php

$components = [
    'components' => [
        'cache' => vendor\libs\Cache::class,
        'db' => vendor\libs\DB::class,
        'css' => vendor\libs\Layout::class,
        'text' => vendor\libs\Text::class,
        'session' => vendor\libs\Session::class,
        'lang' => vendor\libs\Lang::class,
        'utils' => vendor\libs\Utils::class,
        'data' => vendor\libs\Data::class,
        'config' => vendor\core\Config::class,
    ]
];

return $components;