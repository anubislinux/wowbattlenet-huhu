<?php

namespace app\models;

use vendor\core\App;

/**
 * Description of Characters
 *
 */
class Characters extends \vendor\core\base\Model {

    private static $result_characters_data = [];
    private static $resultGamesList = [];
    private static $characters_loaded = false;
    private static $active_character = array();

    public static function getCharInfo($userName) {
        $Statement = Characters::$DBConnection->prepare("SELECT * FROM user_characters WHERE name = '$userName'");
        $Statement->execute();
        $Result = $Statement->fetchAll();
        if(!empty($Result))
        {
            $Result[0]['real'] = self::getCharactersInfo($Result[0]['name']);
            return $Result[0];
        }
        else
            return 0;
    }

    private static function getCharactersInfo($name) {
        $chars_datas = Characters::$CharConnection->prepare("SELECT * FROM characters WHERE name = '$name'");
        $chars_datas->execute();
        $result = $chars_datas->fetchAll();
        return $result[0];
    }

    public static function getUserCharactersAll($userID) {
        $Statement = Characters::$DBConnection->prepare("SELECT * FROM user_characters WHERE bn_id = '$userID'");
        $Statement->execute();
        $Result = $Statement->fetchAll();
        if(!empty($Result))
        {
            return $Result;
        }
        else
            return 0;
    }

    public static function getUserCharactersActive($userID)
    {
        $Statement = Characters::$DBConnection->prepare("SELECT * FROM user_characters WHERE bn_id = '$userID' AND isActive = 1");
        $Statement->execute();
        $Result = $Statement->fetchAll();
        if(!empty($Result))
        {
            return $Result[0];
        }
        else
            return 0;
    }

    public static function getUserCharacters($info) {
        if(!self::isCharactersLoaded()) {
            self::loadCharacters();
        }
        return (isset(self::$active_character[$info])) ? self::$active_character[$info] : false;
    }

    public static function isCharactersLoaded() {
        return self::$characters_loaded;
    }

    public static function loadCharLogin($bnID) {
        Characters::loadCharacters($bnID);
    }

    private static function loadCharacters($bnID) {
        $characters_loaded = false;
        $myGamesList = Characters::$AuthConnection->prepare("SELECT id FROM account WHERE battlenet_account = '{$bnID}'");
        $myGamesList->execute();
        self::$resultGamesList = $myGamesList->fetchAll();
        $account_ids = array();
        $accounts_count = count(self::$resultGamesList);
        for($i = 0; $i < $accounts_count; ++$i) {
            $account_ids[] = self::$resultGamesList[$i]['id'];
        }
        if(is_array($account_ids) && $accounts_count > 0) {
            $total_chars_count = Characters::$AuthConnection->prepare("SELECT SUM(numchars) FROM realmcharacters WHERE acctid = '{$account_ids[0]}'");
            $total_chars_count->execute();
            $resulttotal_chars_count = $total_chars_count->fetchAll();
            $characters_data = Characters::$DBConnection->prepare("SELECT * FROM user_characters WHERE account  = '{$account_ids[0]}'");
            $characters_data->execute();
            $result_characters_data = $characters_data->fetchAll();
        }
        else {
            $resulttotal_chars_count = 0;
        }
        if(!self::$result_characters_data || count(self::$result_characters_data) != $resulttotal_chars_count) {
            self::LoadCharactersFromWorld();
        } else {
            $characters_loaded = true;
            for($i = 0; $i < $resulttotal_chars_count; ++$i) {
                self::$result_characters_data[$i]['class_text'] = App::$app->lang->get('lng.character_class_' . $result_characters_data[$i]['class'], '');
                self::$result_characters_data[$i]['race_text'] = App::$app->lang->get('lng.character_race_' . $result_characters_data[$i]['race'], '');
                self::$result_characters_data[$i]['faction_text'] = (App::$app->utils->getFactionId($result_characters_data[$i]['race']) == 0) ? 'alliance' : 'horde';
                self::$result_characters_data[$i]['url'] = sprintf('/character/%s/%s/simple',
                urlencode($result_characters_data[$i]['realmName']), urlencode($result_characters_data[$i]['name']));
                //$status = WoW::GetRealmStatus($result_characters_data[$i]['realmId']);
                self::$result_characters_data[$i]['realmStatus'] = 'up';

                if(self::$result_characters_data[$i]['isActive']) {
                    self::$active_character = self::$result_characters_data[$i];
                }
            }
            return true;
        }

        if(!self::$result_characters_data) {
            return false;
        }

        $active_set = false;
        $index = 0;

        $characters_delete = Characters::$DBConnection->prepare("DELETE FROM user_characters WHERE account IN ('{$account_ids[0]}')");
        $characters_delete->execute();
            foreach(self::$result_characters_data as $char) {
                $active = $active_set ? 0 : 1;
                $insert_data = Characters::$DBConnection->prepare("INSERT INTO user_characters (bn_id, account, indexs, guid, name, class, class_text, class_key, race, race_text, race_key, gender, level, realmId, realmName, isActive, faction, faction_text, guildId, guildName, guildUrl, url) VALUES (
                '{$bnID}',
                '{$char['account']}',
                '{$index}',
                '{$char['guid']}',
                '{$char['name']}',
                '{$char['class']}',
                '{$char['class_text']}',
                '{$char['class_key']}',
                '{$char['race']}',
                '{$char['race_text']}',
                '{$char['race_key']}',
                '{$char['gender']}',
                '{$char['level']}',
                '{$char['realmId']}',
                '{$char['realmName']}',
                '{$active}',
                '{$char['faction']}',
                '{$char['faction_text']}',
                '{$char['guildId']}',
                '{$char['guildName']}',
                '{$char['guildUrl']}',
                '{$char['url']}')");
                $insert_data->execute();
            }
        self::$characters_loaded = true;
        return true;
    }

    private static function LoadCharactersFromWorld() {
        $result_chars_data = array();
        self::$result_characters_data = array();
        $index = 0;

        $account_ids = array();
        $count = count(self::$resultGamesList);
        if($count == 0) {
                return false;
        }
        for($i = 0; $i < $count; ++$i) {
            $account_ids[] = self::$resultGamesList[$i]['id'];
        }
        $server = array(
            1 => array(
                'id'   => 1,
                'name' => 'Demo',
                'type' => 2
            ),
        );
        foreach($server as $realm_info) {
                $chars_datas = Characters::$CharConnection->prepare("
                    SELECT
                    characters.guid,
                    characters.account,
                    characters.name,
                    characters.class,
                    characters.race,
                    characters.gender,
                    characters.level,
                    guild_member.guildid AS guildId,
                    guild.name AS guildName
                    FROM characters AS characters
                    LEFT JOIN guild_member AS guild_member ON guild_member.guid = characters.guid
                    LEFT JOIN guild AS guild ON guild.guildid = guild_member.guildid
                    WHERE account = '{$account_ids[0]}'");
                $chars_datas->execute();
                $result_chars_datas = $chars_datas->fetchAll();
                if(!$result_chars_datas) {
                    continue;
                }
                foreach($result_chars_datas as $char) {
                    //$status = WoW::GetRealmStatus($realm_info['id']);
                    $status = 'up';
                    $tmp_char_data = array(
                            'account' => $char['account'],
                            'indexs' => $index,
                            'guid' => $char['guid'],
                            'name' => $char['name'],
                            'class' => $char['class'],
                            'class_text' => App::$app->lang->get('lng.character_class_' . $char['class'], ''),
                            'class_key' => App::$app->data->classes[$char['class']]['key'],
                            'race' => $char['race'],
                            'race_text' => App::$app->lang->get('lng.character_race_' . $char['race']),
                            'race_key' => App::$app->data->races[$char['race']]['key'],
                            'gender' => $char['gender'],
                            'level' => $char['level'],
                            'realmName' => $realm_info['name'],
                            'realmId' => $realm_info['id'],
                            'isActive' => 0,
                            'faction' => App::$app->utils->getFactionId($char['race']),
                            'faction_text' => (App::$app->utils->getFactionId($char['race']) == 0) ? 'alliance' : 'horde',
                            'guildId' => $char['guildId'],
                            'guildName' => $char['guildName'],
                            'guildUrl' => sprintf('/guild/%s/%s/', urlencode($realm_info['name']), urlencode($char['guildName'])),
                            'url' => sprintf('/character/%s/%s', urlencode($realm_info['name']), urlencode($char['name'])),
                            'realmStatus' => isset($status[0], $status[0]['status']) ? $status[0]['status'] : 'down'
                    );

                    self::$result_characters_data[] = $tmp_char_data;
                    $index++;
            }

        }
        return self::$result_characters_data;
    }
}
