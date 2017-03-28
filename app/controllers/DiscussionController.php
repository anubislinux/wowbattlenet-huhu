<?php

namespace app\controllers;

use app\models\{Blog, User, Cms, Menu};
use vendor\core\{Helpers, App};
use vendor\libs\{Session, Utils};

/**
 * Description of Discussion
 *
 */
class DiscussionController extends AppController {

    public $layout = "discussion";

    public function updatesVersionAction(){
        $this->layout = false;
        if($this->isAjax()) {
            echo Utils::getCheckUpdates();
        }
    }

    public function menuJsonAction(){
        $this->layout = false;
        if($this->isAjax()) {
            $menu = new Menu();
            echo $menu->generateMenu();
        }
    }

    public function refreshBalanceAction(){
        $this->layout = false;
        if($this->isAjax()) {
            echo User::getUserBalance(Session::get('id'), true);
        }
    }

    public function changeLanguageAction(){
        if($this->route['lang']) {
            $AvailableLanguages = array('ru','en', 'cn');
            if(in_array($this->route['lang'], $AvailableLanguages)) {
                setcookie('locale', $this->route['lang'], strtotime('NEXT YEAR'), '/');
                Helpers::redirect('/');
            } else {
                Helpers::redirect('/');
            }
        } else {
            Helpers::redirect('/');
        }
    }

    public function loadJsonAction(){
        if($this->isAjax()) {
            $blog = new Blog();
            $this->userChatacters(Session::get('bnetid'));
            $characters = $this->charactersAll;
            $charactersActive = $this->charactersActive;
            $comments = $blog->getComments($this->route['id']);
            $this->set(compact('characters', 'charactersActive', 'comments'));
        }
    }

    public function commentJsonAction() {
        //$Response = array(
        //    "commentId" => 5,
        //    "articleId" => 1
        //);
        //echo json_encode($Response);
    }
}
