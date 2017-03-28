<?php

namespace app\controllers;

use app\models\{Characters, User};
use vendor\libs\Session;

/**
 * Description of App
 *
 */
class AppController extends \vendor\core\base\Controller{
    
    public $menu;
    public $meta = [];
    public $charactersAll = [];
    public $charactersLoad = [];
    public $charactersActive;
    public $userInfo = [];
    public $userStatus;

    public function __construct($route) {
        parent::__construct($route);
        $user = new User();
        $this->userInfo = $user->getTegName(Session::get('id')) ?? '';
        $this->userStatus = $user->getUserStatus(Session::get('id'));
    }

    protected function setMeta($title = '', $desc = '', $keywords = ''){
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }

    protected function userChatacters($userID) {
        $userChar = new Characters();
        if(NULL != $userChar->getUserCharactersActive($userID)) {
            $this->charactersActive = $userChar->getUserCharactersActive($userID);
            $this->charactersAll = $userChar->getUserCharactersAll($userID);
        } else {
            $this->charactersLoad = $userChar->loadCharLogin($userID);
        }
    }
    
}
