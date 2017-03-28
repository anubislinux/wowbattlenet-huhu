<?php

namespace app\controllers;

use app\models\Characters;
use vendor\core\App;
use vendor\libs\Session;

/**
 * Description of Character
 *
 */
class CharacterController extends AppController{

    public function viewCharactersAction(){
        $info = new Characters();
        $this->userChatacters(Session::get('bnetid'));
        $characters = $this->charactersAll;
        $charactersActive = $this->charactersActive;
        $charInfo = $info->getCharInfo($this->route['profile']);
        $body = 'logged-in without-nav';
        $simple = $this->route['simple'];
        $userTegName = $this->userInfo;
        $this->set(compact('characters', 'charactersActive', 'charInfo', 'body', 'simple', 'userTegName'));
    }

}