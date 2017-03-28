<?php

namespace app\models;


use vendor\libs\Text;
/**
 * Description of Server
 *
 */
class Server extends \vendor\core\base\Model {

    public static function getServer()
    {
        $Statement = Server::$AuthConnection->prepare('SELECT id, name, address, port, icon, flag, timezone, population, gamebuild FROM realmlist');
        $Statement->execute();
        $result =  $Statement->fetchAll();
        $i = 0;
        foreach($result as $server) {
            $CheckConnection = @fsockopen ($server['address'], $server['port'], $errno, $errstr, 0.5);
            if($CheckConnection) {
                $result[$i]['status'] = "up";
            } else {
                $result[$i]['status'] = "down";
            }
            $result[$i]['type'] = self::realmTypeByID($server['icon']);
            $result[$i]['language'] = self::languageByID($server['timezone']);
            $result[$i]['uptime'] = self::getUptimeForRealm($server['id']);
            $result[$i]['online'] = self::getOnlineForRealm($server['id']);
            $i++;
        }
        return $result;
    }

    public static function realmTypeByID($typeID) {
        $types = [
            '0'  => 'PVE',
            '1'  => '开发',   //- any language
            '2'  => 'United States', //- extended//-Latin
            '3'  => 'Oceanic',       //- extended//-Latin
            '4'  => 'Latin America', //- extended//-Latin
            '5'  => 'Tournament',    //- basic//-Latin at create, any at login
            '6'  => 'Korea',         //- East//-Asian
            '7'  => 'Tournament',    //- basic//-Latin at create, any at login
            '8'  => 'English',       //- extended//-Latin
            '9'  => 'German',        //- extended//-Latin
            '10' => 'French',        //- extended//-Latin
            '11' => 'Spanish',       //- extended//-Latin
            '12' => 'Russian',       //- Cyrillic
            '13' => 'Tournament',    //- basic//-Latin at create, any at login
            '14' => 'Taiwan',        //- East//-Asian
            '15' => 'Tournament',    //- basic//-Latin at create, any at login
            '16' => 'China',         //- East//-Asian
            '17' => 'CN1',           //- basic//-Latin at create, any at login
            '18' => 'CN2',           //- basic//-Latin at create, any at login
            '19' => 'CN3',           //- basic//-Latin at create, any at login
            '20' => 'CN4',           //- basic//-Latin at create, any at login
            '21' => 'CN5',           //- basic//-Latin at create, any at login
            '22' => 'CN6',           //- basic//-Latin at create, any at login
            '23' => 'CN7',           //- basic//-Latin at create, any at login
            '24' => 'CN8',           //- basic//-Latin at create, any at login
            '25' => 'Tournament',    //- basic//-Latin at create, any at login
            '26' => 'Test Server',   //- any language
            '27' => 'Tournament',    //- basic//-Latin at create, any at login
            '28' => 'QA Server',     //- any language
            '29' => 'CN9',           //- basic//-Latin at create, any at login
            '32' => '电信大区',      //- basic//-Latin at create, any at login
            '33' => '网通大区',      //- basic//-Latin at create, any at login
        ];

        return $types[$typeID];
    }

    public static function languageByID($languageID) {
        $languages = [
            '0'  => 'PVE',
            '1'  => '开发',          //- any language
            '2'  => 'United States', //- extended//-Latin
            '3'  => 'Oceanic',       //- extended//-Latin
            '4'  => 'Latin America', //- extended//-Latin
            '5'  => 'Tournament',    //- basic//-Latin at create, any at login
            '6'  => 'Korea',         //- East//-Asian
            '7'  => 'Tournament',    //- basic//-Latin at create, any at login
            '8'  => 'English',       //- extended//-Latin
            '9'  => 'German',        //- extended//-Latin
            '10' => 'French',        //- extended//-Latin
            '11' => 'Spanish',       //- extended//-Latin
            '12' => 'Russian',       //- Cyrillic
            '13' => 'Tournament',    //- basic//-Latin at create, any at login
            '14' => 'Taiwan',        //- East//-Asian
            '15' => 'Tournament',    //- basic//-Latin at create, any at login
            '16' => 'China',         //- East//-Asian
            '17' => 'CN1',           //- basic//-Latin at create, any at login
            '18' => 'CN2',           //- basic//-Latin at create, any at login
            '19' => 'CN3',           //- basic//-Latin at create, any at login
            '20' => 'CN4',           //- basic//-Latin at create, any at login
            '21' => 'CN5',           //- basic//-Latin at create, any at login
            '22' => 'CN6',           //- basic//-Latin at create, any at login
            '23' => 'CN7',           //- basic//-Latin at create, any at login
            '24' => 'CN8',           //- basic//-Latin at create, any at login
            '25' => 'Tournament',    //- basic//-Latin at create, any at login
            '26' => 'Test Server',   //- any language
            '27' => 'Tournament',    //- basic//-Latin at create, any at login
            '28' => 'QA Server',     //- any language
            '29' => 'CN9',           //- basic//-Latin at create, any at login
            '32' => '电信大区',      //- basic//-Latin at create, any at login
            '33' => '网通大区',      //- basic//-Latin at create, any at login
        ];

        return $languages[$languageID];
    }

    public static function getUptimeForRealm($realmID) {
        $Statement = Server::$AuthConnection->prepare('SELECT starttime FROM uptime WHERE realmid = "{$realmID}" LIMIT 1');
        $Statement->execute();
        return Text::GetTimeDiff($Statement->fetch()['starttime']);
    }

    public static function getOnlineForRealm() {
        $Statement = Server::$CharConnection->prepare('SELECT count(guid) as now_online FROM characters WHERE online = 1');
        $Statement->execute();
        return $Statement->fetch()['now_online'];
    }
}