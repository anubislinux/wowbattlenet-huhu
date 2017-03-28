<?php

namespace vendor\core\base;

class View {

    public $route = [];
    public $view;
    public $layout;
    public static $meta = ['title' => 'World of Warcraft', 'desc' => '', 'keywords' => ''];

    public function __construct($route, $layout = '', $view = '') {
        $this->route = $route;
        if($layout === false) {
            $this->layout = false;
        } else {
            $action = $this->route['action'] ?? 'index';
            $controller = $this->route['controller'] ?? 'Error';
            if($action == 'login'){
                $this->layout = 'login';
            }   elseif($action == 'register'){
                $this->layout = 'register';
            }   elseif($action == 'restore'){
                $this->layout = 'restore';
            }   elseif($action == 'management' OR $action == 'dashboard' OR $action == 'changeEmail' OR $action == 'changePassword' OR $action == 'createtag' OR $action == 'verifytag' OR $action == 'claimCode' OR $action == 'orders' OR $action == 'transactionHistory' OR $action == 'ordersDetail' OR $action == 'download'){
                $this->layout = 'management';
            }   elseif($controller == 'Forum'){
                $this->layout = 'forum';
            }   elseif($controller == 'Shop'){
                $this->layout = 'shop';
            }   elseif($controller == 'Dashboard'){
                $this->layout = 'dashboard';
            }  else  {
                $this->layout = $layout ?: LAYOUT;
            }
        }
        $this->view = $view;
    }
    
    public function render($vars) {
        if(is_array($vars)) extract($vars);
        if(is_array($this->route)) {
            $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        }   else    {
            $file_view = APP . "/views/layouts/error_404.php";
        }

        ob_start();
        if(is_file($file_view)){
            require $file_view;
        } elseif($this->route['controller'] == "Forum")    {
            require APP . "/views/layouts/error_404_forum.php";
        } else {
            $body = "server-error logged-in without-nav";
            require APP . "/views/layouts/error_404.php";
        }
        $content = ob_get_clean();

        if(false !== $this->layout) {
            $file_layout = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($file_layout)){
                require $file_layout;
            }else{
                echo "<p>Не найден шаблон <b>$file_layout</b></p>";
            }
        }
    }

    public static function getMeta() {
        echo '<title>' . self::$meta['title'] . '</title>
        <meta name="description" content"'. self::$meta['desc'] . '">
        <meta name="description" content"'. self::$meta['keywords'] . '">';
    }

    public static function setMeta($title = '', $desc = '',$keywords = '') {
        self::$meta['title'] = $title;
        self::$meta['desc'] = $desc;
        self::$meta['keywords'] = $keywords;

    }
}
