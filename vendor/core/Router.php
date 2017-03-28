<?php

namespace vendor\core;

use vendor\core\base\View;
/**
 * Description of Router
 *
 */
class Router {
    
    /**
     * таблица маршрутов
     * @var array
     */
    protected static $routes = [];
    
    /**
     * текущий маршрут
     * @var array
     */
    protected static $route = [];

    protected static $language;
    
    /**
     * добавляет маршрут в таблицу маршрутов
     * 
     * @param string $regexp регулярное выражение маршрута
     * @param array $route маршрут ([controller, action, params])
     */
    public static function add($regexp, $route = []) {
        self::$routes[$regexp] = $route;
    }
    
    /**
     * возвращает таблицу маршрутов
     * 
     * @return array
     */
    public static function getRoutes() {
        return self::$routes;
    }
    
    /**
     * возвращает текущий маршрут (controller, action, [params])
     *
     * @return array
     */
    public static function getRoute() {
        return self::$route;
    }

    /**
     * возвращает текущий язык
     *
     * @return string
     */
    public static function getLanguage() {
        return self::$language;
    }
    
    /**
     * ищет URL в таблице маршрутов
     * @param string $url входящий URL
     * @return boolean
     */
    public static function matchRoute($url) {
        foreach(self::$routes as $pattern => $route){
            if(preg_match("#$pattern#i", $url, $matches)){
                foreach($matches as $k => $v){
                    if(is_string($k)){
                        $route[$k] = $v;
                    }
                }
                if(!isset($route['action'])){
                    $route['action'] = 'index';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }
    
    /**
     * перенаправляет URL по корректному маршруту
     * @param string $url входящий URL
     * @return void
     */
    public static function dispatch($url){
        $url = self::removeQueryString($url);
        if(self::matchRoute($url)){
            $controller = 'app\controllers\\' . self::$route['controller'] . 'Controller';
            $controllerEror = 'app\controllers\ErorController';
            if(class_exists($controller)){
                $cObj = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                if(method_exists($cObj, $action)){
                    $cObj->$action();
                    $cObj->getView();
                }else{
                    $controllerEror = 'app\controllers\ErorController';
                    $cObj = new $controllerEror(self::$route);
                    $action = 'ErorAction';
                    $cObj->$action();
                    $cObj->getView();
                }
            }else{
                $cObj = new $controllerEror(self::$route);
                $action = 'ErorAction';
                $cObj->$action();
                $cObj->getView();
            }
        }else{
            $controllerEror = 'app\controllers\ErorController';
            self::$route['controller'] = "Error";
            $cObj = new $controllerEror(self::$route['controller']);
            $action = 'ErorAction';
            $cObj->$action();
            $cObj->getView();
        }
    }
    
    /**
     * преобразует имена к виду CamelCase
     * @param string $name строка для преобразования
     * @return string
     */
    protected static function upperCamelCase($name) {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }
    
    /**
     * преобразует имена к виду camelCase
     * @param string $name строка для преобразования
     * @return string
     */
    protected static function lowerCamelCase($name) {
        return lcfirst(self::upperCamelCase($name));
    }
    
    /**
     * возвращает строку без GET параметров
     * @param string $url Запрос URL
     * @return string
     */
    protected static function removeQueryString($url) {
        if($url){
            $params = explode('&', $url, 2);
            if(false === strpos($params[0], '=')){
                return rtrim($params[0], '/');
            }else{
                return '';
            }
        }
    }
    
}
