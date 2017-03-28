<?php

namespace app\models;

use vendor\libs\Lang; 
/**
 * Description of Cms
 *
 */
class Cms extends \vendor\core\base\Model {

    public static function getNewsOne($newsID) {
        $Statement = Cms::$DBConnection->prepare("SELECT * FROM news WHERE id = {$newsID}");
        $Statement->execute();
        return $Statement->fetchAll()[0];
    }

    public static function getListNews() {
        $Statement = Cms::$DBConnection->prepare('SELECT * FROM news');
        $Statement->execute();
        return $Statement->fetchAll();
    }

    public static function GetMainMenu() {
        $Statement = Cms::$DBConnection->prepare('SELECT * FROM menu');
        $Statement->execute();
        $result = $Statement->fetchAll();
        $i = 0;
        foreach($result as $name)
        {
            $result[$i]['title'] = self::getTranslated($name['page_index']);
            $i++;
        }
        return $result;
    }

    private static function getTranslated($title) {
        $menu = array(
            'index'     =>      Lang::get('lng.index', ''),
            'game'      =>      Lang::get('lng.game', ''),
            'community' =>      Lang::get('lng.community', ''),
            'media'     =>      Lang::get('lng.media', ''),
            'forums'    =>      Lang::get('lng.forums', ''),
            'services'  =>      Lang::get('lng.shop', '')
        );

        return $menu[$title];
    }
}
