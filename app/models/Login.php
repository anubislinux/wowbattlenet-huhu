<?php

namespace app\models;

/**
 * Description of Main
 *
 */
class Login extends \vendor\core\base\Model {

    private $username;
    private $password;

    /**
     * @param array $data
     */
    public function __construct(Array $data) {
        parent::__construct();
        $this->email = $data['email'] ?? null ;
        $this->password = $data['password'] ?? null ;
    }

    /**
     * @return bool
     */
    public function validate() {
        return !empty($this->email) && !empty($this->password);
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $username
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @param mixed
     */
    public function getByLogin($email) {
        $Statement = Login::$AuthConnection->prepare("SELECT * FROM battlenet_accounts WHERE email = '{$email}' LIMIT 1");
        $Statement->execute();
        $result = $Statement->fetchAll();
        if( isset($result)) {
            return $result;
        }
        return false;
    }
    /**
     * @param mixed
     */
    public function getByLoginIn($email, $password) {
        $password = new Password($email, $password);
        $Statement = Login::$AuthConnection->prepare("SELECT * FROM battlenet_accounts WHERE email = '{$email}' AND sha_pass_hash = '{$password}' LIMIT 1");
        $Statement->execute();
        $result = $Statement->fetchAll();
        if( isset($result[0])) {
            return $result[0];
        }
        return false;
    }

    public function getByUserInfo($email) {
        $Statement = Login::$AuthConnection->prepare("SELECT * FROM account WHERE email = '{$email}' LIMIT 1");
        $Statement->execute();
        $result = $Statement->fetchAll();
        if( isset($result[0])) {
            return $result[0];
        }
        return false;
    }

    public function getByGameMaster($id) {
        $Statement = Login::$AuthConnection->prepare("SELECT * FROM account_access WHERE id = '{$id}' LIMIT 1");
        $Statement->execute();
        $result = $Statement->fetchAll();
        if( isset($result)) {
            return true;
        }
        return false;
    }
}