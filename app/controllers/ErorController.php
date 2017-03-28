<?php

namespace app\controllers;

use vendor\core\App;
use vendor\libs\Session;

/**
 * Description of Eror
 *
 */
class ErorController extends AppController{

    public function ErorAction(){
        $this->userChatacters(Session::get('bnetid'));
        $characters = $this->charactersAll;
        $charactersActive = $this->charactersActive;
        if(isset($this->route['controller']) == "Forum") {
            $body = 'Theme--wow preload';
        } else {
            $body = 'server-error logged-in without-nav';
        }
        $userTegName = $this->userInfo;
        $this->set(compact('characters', 'charactersActive', 'body', 'userTegName'));
    }

}
