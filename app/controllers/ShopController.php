<?php

namespace app\controllers;

use app\models\{Shop, User};
use vendor\core\App;
use vendor\libs\Session;

/**
 * Description of Shop
 *
 */
class ShopController extends AppController{

    public function indexAction() {
        $shop = new Shop();
        $user = new User();
        $items = $shop->getSidebar();
        if(Session::get('id')) {
            $userBalance = $user->getUserBalance(Session::get('id'));
        }
        $body = 'browse-template product-family-wow';
        $userTegName = $this->userInfo;
        $this->set(compact('body', 'items', 'userTegName', 'userBalance'));
    }

    public function mountAction() {
        $shop = new Shop();
        $user = new User();
        $itemData = $shop->getItemData($this->route['item']);
        $userBalance = $user->getUserBalance(Session::get('id'));
        $body = 'product-template video-enabled product-family-wow';
        $userTegName = $this->userInfo;
        $this->set(compact('body', 'userTegName', 'itemData', 'userBalance'));
    }

    public function itemAction() {
        $shop = new Shop();
        $user = new User();
        $itemData = $shop->getItemData($this->route['item']);
        $userBalance = $user->getUserBalance(Session::get('id'));
        $body = 'product-template video-enabled product-family-wow';
        $userTegName = $this->userInfo;
        $this->set(compact('body', 'userTegName', 'itemData', 'userBalance'));
    }

    public function buyAction() {
        if(Session::get('email')) {
            $shop = new Shop();
            $user = new User();
            $itemData = $shop->getItemData($this->route['item']);
            $userBalance = $user->getUserBalance(Session::get('id'));
            $userData = $user->getGameAccounts(Session::get('bnetid'));
            $body = 'browse-template product-family-wow';
            $userTegName = $this->userInfo;
            $this->set(compact('body', 'userTegName', 'itemData', 'userData', 'userBalance'));
        } else {
            Helpers::redirect('/account/login');
        }
    }

    public function payAction() {
        if(Session::get('email')) {
            $shop = new Shop();
            $user = new User();
            $itemData = $shop->getItemData($this->route['item']);
            $userBalance = $user->getUserBalance(Session::get('id'));
            $userAcc = $_POST['gameAccountIds'] ?? '6';
            $body = 'product-template video-enabled product-family-wow';
            $userTegName = $this->userInfo;
            $this->set(compact('body', 'userTegName', 'itemData', 'userAcc', 'userBalance'));
        } else {
            Helpers::redirect('/account/login');
        }
    }

    public function completeAction() {
        if(Session::get('email')) {
            $shop = new Shop();
            $user = new User();
            $userTegName = $this->userInfo;
            $userAcc = $_POST['gameAccountIds'] ?? '6';
            $ActivationCode = Shop::generateItemCode();
            $Account = array(
                'id' => $_POST['gameAccountIds'],
                'username' => $userTegName['tag_name'],
                'item_name' => $_POST['itemName'],
                'email' => Session::get('email'),
                'activation_code' => $ActivationCode
            );
            $itemData = $shop->getItemData($this->route['item']);
            $userBalance = $user->getUserBalance(Session::get('id'));
            $newBalance = $userBalance['balance'] - $itemData['price'];
            User::setBalance(Session::get('id'), $newBalance);
            Shop::insertPurchaseData($itemData['short_code'], $userAcc, $ActivationCode);
            User::InsertPaymentDetails(Session::get('id'), $itemData['short_code'], $itemData['price'], $ActivationCode, $Account['item_name']);
            $body = 'product-template video-enabled product-family-wow';
            $this->set(compact('body', 'userTegName', 'itemData', 'userAcc', 'userBalance', 'ActivationCode'));
        } else {
            Helpers::redirect('/account/login');
        }
    }
}
