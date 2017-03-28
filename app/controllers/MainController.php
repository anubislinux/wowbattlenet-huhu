<?php

namespace app\controllers;

use app\models\Main;
use vendor\core\App;
use vendor\libs\Session;

/**
 * Description of Main
 *
 */
class MainController extends AppController{

    public function indexAction(){
        $model = new Main();
        $news = $model->getAllNews();
        $newsFeatured = $model->getAllNewsFeatured();
        $slideshow = $model->getSlideshowItems();
        $this->userChatacters(Session::get('bnetid'));
        $characters = $this->charactersAll;
        $charactersActive = $this->charactersActive;
        $userTegName = $this->userInfo;
        $body = 'homepage news';
        $this->set(compact('characters', 'charactersActive', 'body', 'news', 'userTegName', 'newsFeatured', 'slideshow'));
    }
    
}
