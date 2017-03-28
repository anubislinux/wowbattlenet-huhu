<?php

namespace app\models;

use vendor\libs\Lang;
/**
 * Description of Cms
 *
 */
class Shop extends \vendor\core\base\Model {

    public static function insertPurchaseData($Item, $Account, $Code) {
        $Date = time();
        $Statement = Shop::$DBConnection->prepare("INSERT INTO shop_codes
        (purchased_item, purchase_code, purchase_date, purchased_for_account)
        VALUES
        ('{$Item}', '{$Code}', '{$Date}', '{$Account}')");
        $Statement->execute();
        return true;
    }

    private static function getCategoryByID($CategoryID) {
        $Categories = array(
            1 => array('name' => 'services', 'type' => '《魔兽世界》服务: '),
            2 => array('name' => 'items', 'type' => '《魔兽世界》游戏内容: '),
            3 => array('name' => 'mounts', 'type' => '《魔兽世界》虚拟坐骑: '),
            4 => array('name' => 'wallet', 'type' => '《魔兽世界》游戏内容礼包: '),
            5 => array('name' => 'pets', 'type' => '《魔兽世界》虚拟宠物: '),
        );
        return $Categories[$CategoryID];
    }

    public static function getItemData($itemName) {
        $Statement = Shop::$DBConnection->prepare("SELECT si.*, p.price FROM shop_items si LEFT JOIN prices p ON si.short_code = p.short_code  WHERE si.short_code = '{$itemName}'");
        $Statement->execute();
        $Result = $Statement->fetch();
        $CategoryData = self::getCategoryByID($Result['item_type']);
        $Result['category'] = $CategoryData['name'];
        $Result['category_desc'] = $CategoryData['type'];
        return $Result;
    }

    public static function getSidebar() {
        $sidebar  = array();
        $sidebar['mounts'] = self::getMounts();
        $sidebar['pets'] = self::getPets();
        $sidebar['items'] = self::getItems();

        return $sidebar;
    }

    private static function getMounts()
    {
        $Statement = Shop::$DBConnection->prepare('SELECT si.*, p.price FROM shop_items si LEFT JOIN prices p ON si.short_code = p.short_code  WHERE item_type = 3');
        $Statement->execute();
        $result = $Statement->fetchAll();
        return $result;
    }

    private static function getPets()
    {

    }

    private static function getItems()
    {
        $Statement = Shop::$DBConnection->prepare('SELECT si.*, p.price FROM shop_items si LEFT JOIN prices p ON si.short_code = p.short_code  WHERE item_type = 2');
        $Statement->execute();
        return $Statement->fetchAll();
    }

    public static function generateItemCode() {
        $tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $segment_chars = 7;
        $num_segments = 8;
        $key_string = '';

        for ($i = 0; $i < $num_segments; $i++)
        {
            $segment = '';
            for ($j = 0; $j < $segment_chars; $j++)
                $segment .= $tokens[rand(0, 35)];
            $key_string .= $segment;
            if ($i < ($num_segments - 1))
                $key_string .= '-';
        }

        return $key_string;
    }
}
