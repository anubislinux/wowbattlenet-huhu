<?php

namespace app\models;

use vendor\libs\Lang;

class Forum extends \vendor\core\base\Model {

    public static function getTopics($id) {
        $Statement = Forum::$DBConnection->prepare('SELECT * FROM forum_topics');
        $Statement->execute();
        $Result = $Statement->fetchAll();
    }

    public static function getForums() {
        $Statement = Forum::$DBConnection->prepare('SELECT * FROM forums');
        $Statement->execute();
        $Result = $Statement->fetchAll();
        $ArrayIndex = 0;
        $Forums = array();
        foreach($Result as $ForumCategory)
        {
            $Result[$ArrayIndex]['forum_name'] = Forum::getForumNameTranslated($ForumCategory['forum_name']);
            $Result[$ArrayIndex]['forum_description'] = Forum::getForumDescriptionTranslated($ForumCategory['forum_description']);
            $Result[$ArrayIndex]['forum_type_name'] = Forum::getForumTypeTranslated($ForumCategory['forum_type']);
            $ArrayIndex++;
        }
        foreach($Result as $ForumCategory)
            $Forums[$ForumCategory['forum_type']][] = $ForumCategory;
        return $Forums;
    }

    private static function getForumDescriptionTranslated($forumDesc) {
        $forumDescr = array(
            1   => Lang::get('lng.forum_category_description', ''),
            2   => Lang::get('lng.forum_category_description2', ''),
            3   => Lang::get('lng.forum_category_description3', ''),
            4   => Lang::get('lng.forum_category_description4', ''),
            5   => Lang::get('lng.forum_category_description5', ''),
            6   => Lang::get('lng.forum_category_description6', ''),
            7   => Lang::get('lng.forum_category_description7', ''),
            8   => Lang::get('lng.forum_category_description8', ''),
            9   => Lang::get('lng.forum_category_description9', ''),
            10  => Lang::get('lng.forum_category_description10', ''),
            11  => Lang::get('lng.forum_category_description11', ''),
            12  => Lang::get('lng.forum_category_description12', ''),
            13  => Lang::get('lng.forum_category_description13', ''),
            14  => Lang::get('lng.forum_category_description14', ''),
            15  => Lang::get('lng.forum_category_description15', ''),
            NULL  => '',
        );

        return $forumDescr[$forumDesc];
    }

    private static function getForumNameTranslated($forumName) {
        $forumNames = array(
            1   => Lang::get('lng.forum_category_forum_name', ''),
            2   => Lang::get('lng.forum_category_forum_name2', ''),
            3   => Lang::get('lng.forum_category_forum_name3', ''),
            4   => Lang::get('lng.forum_category_forum_name4', ''),
            5   => Lang::get('lng.forum_category_forum_name5', ''),
            6   => Lang::get('lng.forum_category_forum_name6', ''),
            7   => Lang::get('lng.forum_category_forum_name7', ''),
            8   => Lang::get('lng.forum_category_forum_name8', ''),
            9   => Lang::get('lng.forum_category_forum_name9', ''),
            10  => Lang::get('lng.forum_category_forum_name10', ''),
            11  => Lang::get('lng.forum_category_forum_name11', ''),
            12  => Lang::get('lng.forum_category_forum_name12', ''),
            13  => Lang::get('lng.forum_category_forum_name13', ''),
            14  => Lang::get('lng.forum_category_forum_name15', ''),
            15  => Lang::get('lng.forum_category_forum_name16', ''),
            16  => Lang::get('lng.forum_category_dh', ''),
            17  => Lang::get('lng.forum_category_var', ''),
            18  => Lang::get('lng.forum_category_druid', ''),
            19  => Lang::get('lng.forum_category_prist', ''),
            20  => Lang::get('lng.forum_category_mag', ''),
            21  => Lang::get('lng.forum_category_monk', ''),
            22  => Lang::get('lng.forum_category_hant', ''),
            23  => Lang::get('lng.forum_category_paladin', ''),
            24  => Lang::get('lng.forum_category_rogue', ''),
            25  => Lang::get('lng.forum_category_dk', ''),
            26  => Lang::get('lng.forum_category_warlock', ''),
            27  => Lang::get('lng.forum_category_shaman', ''),
        );

        return $forumNames[$forumName];
    }

    private static function getForumTypeTranslated($ForumType) {
        $ForumTypes = array(
            1 => Lang::get('lng.forum_category_support_name', ''),
            2 => Lang::get('lng.forum_category_community_name', ''),
            3 => Lang::get('lng.forum_category_game_name', ''),
            4 => Lang::get('lng.forum_category_pvp_name', ''),
            5 => Lang::get('lng.forum_category_classes_name', ''),
        );

        return $ForumTypes[$ForumType];
    }

}