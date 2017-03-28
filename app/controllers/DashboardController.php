<?php

namespace app\controllers;

use app\models\Cms;

use vendor\core\{App, Helpers};
use vendor\libs\Session;

/**
 * Description of DashboardController
 *
 */
class DashboardController extends AppController {

    public function newsEditAction() {
        //var_dump($this->route['id']);
        $news = new Cms();
        $blog = $news->getNewsOne($this->route['id']);
        $userTegName = $this->userInfo;
        $this->set(compact('blog', 'userTegName'));
    }

    public function newsListAction() {
        $news = new Cms();
        $blogall = $news->getListNews();
        $userTegName = $this->userInfo;
        $this->set(compact('blogall', 'userTegName'));
    }

    public function indexAction(){
        $userTegName = $this->userInfo;
        $this->set(compact('userTegName'));
    }

}