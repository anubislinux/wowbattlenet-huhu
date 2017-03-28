<?php

namespace app\controllers;

use app\models\Server;
use vendor\core\App;

/**
 * Description of Sidebar
 *
 */
class SidebarController extends AppController{

    public $layout = 'sidebar';

    public function realmStatusAction(){
        $model = new Server();
        $servers = Server::getServer();
        $this->set(compact('servers'));
    }

    public function clientAction(){

    }

    public function eventsAction(){

    }

    public function blizzardPostsAction(){

    }
}
