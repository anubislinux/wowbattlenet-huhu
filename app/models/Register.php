<?php

namespace app\models;

use vendor\core\base\Model;
use vendor\libs\Session;
use vendor\core\App;

class Register extends Model {

    private $email;
    private $username;
    private $realname;
    private $password;
    private $passwordConfirm;

    function __construct(Array $data) {
        parent::__construct();
        $this->username = $data['username'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->password = $data['password'] ?? null;
        $this->passwordConfirm = $data['rpassword'] ?? null;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }
    public function passwordsMatch() {
        return $this->password == $this->passwordConfirm;
    }

    public function validate() {
        return !empty($this->email) && !empty($this->password) && !empty($this->passwordConfirm) && $this->passwordsMatch();
    }

    public function saveUser() {
        $email = $this->getEmail();
        $password = new Password($email, $this->getPassword());
        $Statement = Register::$AuthConnection->prepare("SELECT * FROM battlenet_accounts WHERE email = '{$email}' LIMIT 1");
        $Statement->execute();
        $result = $Statement->fetchAll();
        if ($result) {
            Session::setFlash("Such user already exists!");
        } else {
            $lastLogin = date("Y-m-d H:i:s");
            $Statement = Register::$AuthConnection->prepare("INSERT INTO battlenet_accounts (email, sha_pass_hash, last_login) VALUES ('{$email}', '{$password}', '{$lastLogin}')");
            $Statement->execute();
            self::gameAccount($email);
            Session::setFlash("Registration was successful");
        }
    }

    public function saveUserOld() {
        $email = $this->getEmail();
        $sha_pass_hash = sha1(strtoupper($this->getUsername()) . ":" . strtoupper($this->getPassword()));
        $username = $this->getUsername();
        $lastLogin = date("Y-m-d H:i:s");
        $expansion = App::$app->config->setConfig('game_core');
        $Statement = Register::$AuthConnection->prepare("SELECT * FROM account WHERE username = '{$username}' LIMIT 1");
        $Statement->execute();
        $result = $Statement->fetchAll();
        if ($result) {
            Session::setFlash("Such user already exists!");
        } else {
            $StatementGame = Register::$AuthConnection->prepare("INSERT INTO account (username, sha_pass_hash, email, reg_mail, last_login, expansion) VALUES ('{$username}', '{$sha_pass_hash}', '{$email}', '{$email}', '{$lastLogin}', '{$expansion}')");
            $StatementGame->execute();
            Session::setFlash("Registration was successful");
            self::userInfo(Register::$AuthConnection->lastInsertId());
        }
    }

    private function gameAccount($email) {
        $Statement = Register::$AuthConnection->prepare("SELECT id FROM battlenet_accounts WHERE email = '{$email}' LIMIT 1");
        $Statement->execute();
        $result = $Statement->fetchAll();
        $sha_pass_hash = sha1(strtoupper($result[0]['id']) . '#1'.  ":" . strtoupper($this->getPassword()));
        $username = $result[0]['id'].'#1';
        $lastLogin = date("Y-m-d H:i:s");
        $Statement = Register::$AuthConnection->prepare("INSERT INTO account (username, sha_pass_hash, email, reg_mail, last_login, expansion, battlenet_account, battlenet_index) VALUES ('{$username}', '{$sha_pass_hash}', '{$email}', '{$email}', '{$lastLogin}', '6', '{$result[0]['id']}', '1')");
        $Statement->execute();
        self::userInfo(Register::$AuthConnection->lastInsertId());
    }

    private function userInfo($userID) {
        $Statement = Register::$DBConnection->prepare("INSERT INTO users (uid) VALUES ('{$userID}')");
        $Statement->execute();
    }

}