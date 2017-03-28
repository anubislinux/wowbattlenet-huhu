<?php

namespace app\models;

/**
 * Description of Main
 *
 */
class Password extends \vendor\core\base\Model {

    private $password;
    private $email;
    private $hashedPassword;
    private $salt;

    function __construct($email, $password, $saltText = null) {
        $this->email = $email;
        $this->password = $password;
        $this->hashedPassword = strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash("sha256",strtoupper(hash("sha256", strtoupper($email)).":".strtoupper($password))))))));
    }

    public function __toString() {
        return $this->hashedPassword;
    }

}