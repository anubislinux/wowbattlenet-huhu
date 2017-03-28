<?php

namespace app\models;


use vendor\core\App;
/**
 * Description of Main
 *
 */
class Main extends \vendor\core\base\Model {

    public static function getAllNews() {
        $Statement = Main::$DBConnection->prepare('SELECT * FROM news ORDER BY post_date DESC');
        $Statement->execute();
        $result = $Statement->fetchAll();
        $i = 0;
        foreach($result as $blog) {
            $result[$i]['url'] = App::$app->text->createSlug($blog['title']);
            $i++;
        }
        return $result;

    }

    public static function getAllNewsFeatured() {
        $Statement = Main::$DBConnection->prepare('SELECT * FROM news ORDER BY RAND() LIMIT 3');
        $Statement->execute();
        $result = $Statement->fetchAll();
        $i = 0;
        foreach($result as $blog) {
            $result[$i]['url'] = App::$app->text->createSlug($blog['title']);
            $i++;
        }
        return $result;

    }

    public static function getSlideshowItems() {
        $Statement = Main::$DBConnection->prepare('SELECT * FROM slideshow WHERE enabled = 1 ORDER BY ID DESC');
        $Statement->execute();
        $Result = $Statement->fetchAll();
        return $Result;
    }
}