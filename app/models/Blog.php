<?php

namespace app\models;

use vendor\core\App;

/**
 * Description of Blog
 *
 */
class Blog extends \vendor\core\base\Model {

    public static function viewNews($id)
    {
        $Statement = Blog::$DBConnection->prepare("SELECT * FROM news WHERE id = '{$id}'");
        $Statement->execute();
        $result = $Statement->fetchAll();
        $result[0]['url'] = App::$app->text->createSlug($result[0]['title']);
        return $result[0];
    }

    public static function getComments($id) {
        $Statement = Blog::$DBConnection->prepare("
                SELECT c.*, ch.race_text, ch.class_text, ch.gender
                FROM comments c, user_characters ch
                WHERE c.comment_by = ch.name AND article_id = '{$id}' AND replied_to IS NULL
                ORDER BY id
                DESC");
        $Statement->execute();
        $result = $Statement->fetchAll();
        $i = 0;
        foreach($result as $comment)
        {
            $result[$i]['nested_comments'] = Blog::getNestedComments($comment['article_id'], $comment['id']);
            $i++;
        }
        return $result;
    }

    private static function getNestedComments($id, $cid) {
        $Statement = Blog::$CConnection->prepare("
            SELECT
                c.*,
                ch.race as poster_race,
                ch.class as poster_class,
                ch.gender as poster_gender
            FROM
                comments c, characters ch
            WHERE
                c.comment_by = ch.name
            AND
                replied_to = '{$cid}'
            AND
                article_id = '{$id}'

        ");
        $Statement->execute();
        return $Statement->fetchAll();
    }
}
