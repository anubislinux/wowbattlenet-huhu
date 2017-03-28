<?php

namespace app\models;

use vendor\libs\Lang;
/**
 * Description of User
 *
 */
class User extends \vendor\core\base\Model {

    public static function getUserStatus($userID) {
        if($userID == NULL) {
            return FALSE;
        }
        $Statement = User::$AuthConnection->prepare("SELECT * FROM account_access WHERE id = '{$userID}'");
        $Statement->execute();
        $result = $Statement->fetchAll();
        if($result) {
            if($result[0]['id'] === $userID) {
                return $result[0]['id'];
            }
            return FALSE;
        }
        return FALSE;
    }

    public static function changePasswordForUser($userID, $email, $password) {
        User::changeAccountPassword($userID, $email, $password);
        User::changeGamePassword($userID, $email, $password);
        return true;
    }

    public static function changeEmailForUser($userID, $email, $password) {
        User::changeAccountEmail($userID, $email, $password);
        User::changeGameEmail($userID, $email, $password);
        return true;
    }

    private static function changeAccountPassword($userID, $email, $password) {
        $HashedPassword = new Password($email, $password);
        $StatementPass = User::$AuthConnection->prepare("UPDATE battlenet_accounts SET sha_pass_hash = '{$HashedPassword}' WHERE id = '{$userID}'");
        $StatementPass->execute();
        return true;
    }

    private static function changeGamePassword($userID, $email, $password) {
        $sha_pass_hash = sha1(strtoupper($userID) . '#1'.  ":" . strtoupper($password));
        $StatementPass = User::$AuthConnection->prepare("UPDATE account SET sha_pass_hash = '{$sha_pass_hash}' WHERE battlenet_account = '{$userID}'");
        $StatementPass->execute();
        return true;
    }

    private static function changeAccountEmail($userID, $email, $password) {
        $Statement = User::$AuthConnection->prepare("UPDATE battlenet_accounts SET email = '{$email}' WHERE id = '{$userID}'");
        $Statement->execute();
        $HashedPassword = new Password($email, $password);
        $StatementPass = User::$AuthConnection->prepare("UPDATE battlenet_accounts SET sha_pass_hash = '{$HashedPassword}' WHERE id = '{$userID}'");
        $StatementPass->execute();
        return true;
    }

    private static function changeGameEmail($userID, $email, $password) {
        $Statement = User::$AuthConnection->prepare("UPDATE account SET email = '{$email}', reg_mail = '{$email}' WHERE battlenet_account = '{$userID}'");
        $Statement->execute();
        $sha_pass_hash = sha1(strtoupper($userID) . '#1'.  ":" . strtoupper($password));
        $StatementPass = User::$AuthConnection->prepare("UPDATE account SET sha_pass_hash = '{$sha_pass_hash}' WHERE battlenet_account = '{$userID}'");
        $StatementPass->execute();
        return true;
    }

    public static function verifyOldPassword($email, $password) {
        $HashedPassword = new Password($email, $password);
        $Statement = User::$AuthConnection->prepare("SELECT email FROM battlenet_accounts WHERE email = '{$email}' AND sha_pass_hash = '{$HashedPassword}'");
        $Statement->execute();
        $result = $Statement->fetch();
        if($result['email'] == $email)
            return true;
        else
            return false;
    }

    public static function getOrderDetail($UserID, $shopID) {
        $Statement = User::$DBConnection->prepare("SELECT * FROM users_payments_history WHERE userid = '{$UserID}' AND id = '{$shopID}'");
        $Statement->execute();
        $Result = $Statement->fetchAll();
        foreach($Result as $Payment) {
            $Result[0]['status'] = self::paymentStatusConverter($Payment['status']);
        }

        return $Result[0];
    }

    public static function getOrderHistory($UserID) {
        $Statement = User::$DBConnection->prepare("SELECT * FROM users_payments_history WHERE userid = '{$UserID}'");
        $Statement->execute();
        $Result = $Statement->fetchAll();
        $i = 0;
        foreach($Result as $Payment) {
            $Result[$i]['status'] = self::paymentStatusConverter($Payment['status']);
            $i++;
        }

        return $Result;
    }

    private static function paymentStatusConverter($StatusID) {
        $Statuses = array(
            0 => Lang::get('lng.payment_status_queued', ''),
            1 => Lang::get('lng.payment_status_completed', ''),
        );
        return $Statuses[$StatusID];
    }

    public static function insertPaymentDetails($UserID, $ServiceID, $Price, $ItemCode = null, $itemName) {
        if($ItemCode == null) {
            $ItemCode = '';
        }
        $Status = 1;
        $Date = date('Y-m-d H:i:s', time());
        $Statement = User::$DBConnection->prepare("INSERT INTO users_payments_history
        (userid, service, item_name, price, date, digital_key, status)
        VALUES
        ('{$UserID}', '{$ServiceID}', '{$itemName}', '{$Price}', '{$Date}', '{$ItemCode}', '{$Status}')");
        $Statement->execute();
        return true;
    }

    public static function SetBalance($UserID, $Balance) {
        $Statement = User::$DBConnection->prepare("UPDATE users SET balance = '{$Balance}' WHERE uid = '{$UserID}'");
        $Statement->execute();
        return true;
    }

    public static function getUserBalance($UserID, $balanceJson = false) {
        $Statement = User::$DBConnection->prepare("SELECT * FROM users WHERE uid = '{$UserID}'");
        $Statement->execute();
        $result = $Statement->fetchAll();
        if(!$balanceJson) {
            return $result[0];
        } else {
            return User::createBalanceJSON($result[0]['selected_currency'], $result[0]['balance']);
        }
    }

    private static function CreateBalanceJSON($SelectedCurrency, $CurrentBalance)
    {
        $AvailableCurrencies = array('RUB', 'EUR', 'USD', 'GBP');
        $BaseCurrency = "USD";
        $BalanceArray = array();
        foreach($AvailableCurrencies as $Currency)
        {
            $BalanceArray[$Currency] = array(
                "currency" => $Currency,
                "balance" => $CurrentBalance,
                "pendingBalance" => 0,
                "balanceQuotaUsage" => null,
                "balanceIncludingPending" => $CurrentBalance + 0
            );
        }
        $ServerData = array(
            "serverHostname" => $_SERVER['SERVER_NAME'],
            "serverPort" => $_SERVER['SERVER_PORT'],
            "serverScheme" => 'http',
            "countryCodeAlpha3" => $SelectedCurrency
        );
        $BalanceArray = array_merge($BalanceArray, $ServerData);
        return json_encode($BalanceArray);
    }

    public static function createTagName($tagName, $userID) {
        $tagNameID = 1;
        if(!self::isTagNameFree($tagName)) {
            $tagNameID = self::getLastTagNameID($tagName);
        }
        self::updateUsersTagName($userID, $tagName, $tagNameID);
        return array('tag' => $tagName, 'id' => $tagNameID);
    }

    private static function isTagNameFree($tagName) {
        $Statement = User::$DBConnection->prepare("SELECT tag_name FROM users WHERE tag_name = '{$tagName}'");
        $Statement->execute();
        $Statement->fetch();
        if($Statement->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    }

    private static function getLastTagNameID($tagName) {
        $Statement = User::$DBConnection->prepare("SELECT MAX(tag_id)+1 as new_id FROM users WHERE tag_name = '{$tagName}'");
        $Statement->execute();
        $result = $Statement->fetch();
        return $result['new_id'];
    }

    private static function updateUsersTagName($userID, $tagName, $tagNameID) {
        $Statement = User::$DBConnection->prepare("UPDATE users SET tag_name = '{$tagName}', tag_id = '{$tagNameID}' WHERE uid = '{$userID}'");
        $Statement->execute();
        return true;
    }

    public static function getTegName($UserID) {
        $Statement = User::$DBConnection->prepare("SELECT tag_name, tag_id FROM users WHERE uid = '{$UserID}'");
        $Statement->execute();
        $result = $Statement->fetchAll();
        if($Statement->rowCount() > 0) {
            return $result[0];
        }   else    {
            return false;
        }
    }

    public static function getGameAccounts($UserID) {
        $Statement = User::$AuthConnection->prepare("SELECT * FROM account WHERE battlenet_account = '{$UserID}'");
        $Statement->execute();
        $result = $Statement->fetchAll();
        $i = 0;
        foreach($result as $account)
        {
            $result[$i]['expansion_name'] = User::expansionByID($account['expansion']);
            $result[$i]['status_account'] = User::getAccountsBanned($account['id']);
            $i++;
        }
        return $result;
    }

    public static function getAccountsBanned($UserID) {
        $Statement = User::$AuthConnection->prepare("SELECT * FROM account_banned WHERE id = '{$UserID}' AND active = 1");
        $Statement->execute();
        $result = $Statement->fetchAll();
        if($Statement->rowCount() > 0)
            return true;
        else
            return false;
    }

    private static function expansionByID($expansionID, $getAllExpansions = false) {
        $expansions = array(
            0 => 'Classic',
            1 => 'The Burning Crusade',
            2 => 'Wrath of the Lich King',
            3 => 'Cataclysm',
            4 => 'Mists of Pandaria',
            5 => 'Warlords of Draenor',
            6 => 'Legion'
        );
        if(!$getAllExpansions)
            return $expansions[$expansionID];
        else
            return array_reverse(array_slice($expansions, 0, $expansionID));
    }
}