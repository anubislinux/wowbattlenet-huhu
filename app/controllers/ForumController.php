<?php

namespace app\controllers;

use app\models\Forum;
use vendor\core\App;
use vendor\libs\Session;

/**
 * Description of Forum
 *
 */
class ForumController extends AppController{

    public function indexAction(){
        $this->userChatacters(Session::get('bnetid'));
        $characters = $this->charactersAll;
        $charactersActive = $this->charactersActive;
        $body = 'Theme--wow glass-header';
        $forum = new Forum();
        $forums = $forum->getForums();
        $this->set(compact('characters', 'charactersActive', 'body', 'forums'));
    }

    public function forumviewAction(){
        $fid = $this->route['fid'];
        $this->userChatacters(Session::get('bnetid'));
        $characters = $this->charactersAll;
        $charactersActive = $this->charactersActive;
        $body = 'Theme--wow';
        $topics = new Forum();
        $topic = $topics->getTopics($fid);
        $this->set(compact('characters', 'charactersActive', 'body', 'topic'));
    }

}
