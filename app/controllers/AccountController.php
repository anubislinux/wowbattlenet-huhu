<?php

namespace app\controllers;

use app\models\{Login, Register, User, Characters};
use vendor\core\{App, Helpers};
use vendor\libs\Session;

/**
 * Description of Account
 *
 */
class AccountController extends AppController {

    public function downloadAction() {
        $user = new User();
        $userBalance = $user->getUserBalance(Session::get('id'));
        $userTegName = $user->getTegName(Session::get('id'));
        $this->set(compact('userTegName', 'userBalance'));
    }

    public function ordersDetailAction() {
        $user = new User();
        $userBalance = $user->getUserBalance(Session::get('id'));
        $userTegName = $user->getTegName(Session::get('id'));
        $userOrderDetail = $user->getOrderDetail(Session::get('id'), $_GET['oId']);
        $this->set(compact('userTegName', 'userBalance', 'userOrderDetail'));
    }

    public function ordersAction() {
        $user = new User();
        $userBalance = $user->getUserBalance(Session::get('id'));
        $userTegName = $user->getTegName(Session::get('id'));
        $userOrderHistory = $user->getOrderHistory(Session::get('id'));
        $this->set(compact('userTegName', 'userBalance', 'userOrderHistory'));
    }

    public function transactionHistoryAction() {
        $user = new User();
        $userBalance = $user->getUserBalance(Session::get('id'));
        $userTegName = $user->getTegName(Session::get('id'));
        $this->set(compact('userTegName', 'userBalance'));
    }

    public function createtagAction() {}

    public function verifytagAction() {
        if(isset($_POST['freedomTag'])) {
            $user = new User();
            $tag = $user->createTagName($_POST['freedomTag'], Session::get('id'));
            $this->set(compact('tag'));
        } else {
            Helpers::redirect('/account/management/');
        }
    }

    public function accountAction() {
        if(!Session::get('email')) {
            header( 'Location: /account/login/', true, 301 );
        }   else {
            Helpers::redirect('/account/management/');
        }
    }

    public function changeEmailAction() {
        if(Session::get('email')) {
            $user = new User();
            $userBalance = $user->getUserBalance(Session::get('id'));
            $this->set(compact('userBalance'));
            if (isset ($_POST['newEmail'])) {
                if($_POST['newEmail'] == $_POST['newEmailVerify']) {
                    if($user->verifyOldPassword(Session::get('email'), $_POST['password'])) {
                        $user->changeEmailForUser(Session::get('bnetid'), $_POST['newEmail'], $_POST['password']);
                        Session::destroy();
                        Helpers::redirect('/account/login');
                    }
                }
            }
        } else {
            Helpers::redirect('/account/login');
        }
    }

    public function changePasswordAction() {
        if(Session::get('email')) {
            $user = new User();
            $userBalance = $user->getUserBalance(Session::get('id'));
            $userStatus = $user->getAccountsBanned(Session::get('id'));
            $email = Session::get('email');
            $this->set(compact('userStatus', 'userBalance', 'email'));
            if (isset ($_POST['oldPassword'])) {
                if($_POST['newPassword'] == $_POST['newPasswordVerify']) {
                    if($user->verifyOldPassword(Session::get('email'), $_POST['password'])) {
                        $user->changePasswordForUser(Session::get('bnetid'), Session::get('email'), $_POST['newPassword']);
                        Session::destroy();
                        Helpers::redirect('/account/login');
                    }
                }
            }
        } else {
            Helpers::redirect('/account/login');
        }
    }

    public function signoutAction() {
        Session::destroy();
        Helpers::redirect('/');
    }

    public function registerAction() {
        if(!Session::get('email')) {
            $mRegister = new Register($_POST);
            if ($_POST) {
                if ($mRegister->validate()) {
                    if(App::$app->config->setConfig('game_core')  >= '5') {
                        $mRegister->saveUser();
                    }   else {
                        $mRegister->saveUserOld();
                    }
                } else {
                    Session::setFlash($mRegister->passwordsMatch() ? 'Please fill in fields' : 'Passwords don\'t match');
                }
            }
        } else {
            Helpers::redirect('/');
        }
    }

    public function loginAction() {
        if(!Session::get('email')) {
        $mLogin = new Login($_POST);
            if($_POST && isset($_POST['email']) && isset($_POST['password'])) {
                if ($mLogin->getByLogin($_POST['email'])) {
                    $user = $mLogin->getByLoginIn($_POST['email'], $_POST['password']);
                    if($user) {
                        $userInfo = $mLogin->getByUserInfo($user['email']);
                        Session::set('email', $userInfo['email']);
                        Session::set('id', $userInfo['id']);
                        Session::set('bnetid', $userInfo['battlenet_account']);
                        Helpers::redirect('/');
                    } else {
                        Session::setFlash("Invalid username or password");
                    }
                } else {
                    Session::setFlash("User does not exist");
                }
            }
        } else {
            Helpers::redirect('/');
        }
    }

    public function restoreAction() {

    }

    public function claimCodeAction() {
        if(Session::get('email')) {
            $user = new User();
            $userGame = $user->getGameAccounts(Session::get('bnetid'));
            $userBalance = $user->getUserBalance(Session::get('id'));
            $userTegName = $user->getTegName(Session::get('id'));
            $this->set(compact('userGame', 'userTegName', 'userBalance'));
        } else {
            Helpers::redirect('/account/login');
        }
    }

    public function managementAction() {
        if(Session::get('email')) {
            $user = new User();
            $userGame = $user->getGameAccounts(Session::get('bnetid'));
            $userBalance = $user->getUserBalance(Session::get('id'));
            $userTegName = $user->getTegName(Session::get('id'));
            $this->set(compact('userGame', 'userTegName', 'userBalance'));
        } else {
            Helpers::redirect('/account/login');
        }
    }

    public function dashboardAction() {
        if(Session::get('email')) {
            $user = new User();
            $userBalance = $user->getUserBalance(Session::get('id'));
            $userStatus = $user->getAccountsBanned(Session::get('id'));
            $this->set(compact('userStatus', 'userBalance'));
        } else {
            Helpers::redirect('/account/login');
        }
    }
}