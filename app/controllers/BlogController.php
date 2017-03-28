<?php

namespace app\controllers;

use app\models\Blog;
use vendor\core\App;
use vendor\libs\Session;

/**
 * Description of Blog
 *
 */
class BlogController extends AppController{

    public function viewAction(){
        $blog = new Blog();
        $news = $blog->viewNews($this->route['shid']);
        $this->userChatacters(Session::get('bnetid'));
        $characters = $this->charactersAll;
        $charactersActive = $this->charactersActive;
        $userTegName = $this->userInfo;
        $body = 'blog-article news';
        $this->set(compact('characters', 'charactersActive', 'body', 'news', 'userTegName'));
    }
}
