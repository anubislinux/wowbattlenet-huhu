<?php

namespace app\controllers;

use app\models\Server;
use vendor\core\App;
use vendor\libs\Session;

/**
 * Description of Community
 *
 */
class CommunityController extends AppController{

    public function indexAction(){
        $this->userChatacters(Session::get('bnetid'));
        $characters = $this->charactersAll;
        $charactersActive = $this->charactersActive;
        $body = 'community-home';
        $userTegName = $this->userInfo;
        $this->set(compact('characters', 'charactersActive', 'body', 'userTegName'));
    }

    public function statusAction(){
        $this->userChatacters(Session::get('bnetid'));
        $characters = $this->charactersAll;
        $charactersActive = $this->charactersActive;
        $servers = Server::getServer();
        $body = 'realm-status';
        $userTegName = $this->userInfo;
        $this->set(compact('servers','characters', 'charactersActive', 'body', 'userTegName'));
    }
}
