<?php

namespace vendor\libs;

use vendor\libs\Session;

class Text {

    public static function rusDate($str) {
        $locale = $_COOKIE['locale'];
        $months = array('Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря');
        $newDatetime = new \Datetime($str);
        $month = $newDatetime->format('n');
        if($locale == 'ru') {
            if($newDatetime->format('Y') == date('Y')) {
                return $album_data = $newDatetime->format('d '.$months[$month-1].'');
            } else {
                return $album_data = $newDatetime->format('d '.$months[$month-1].'') . " " . $newDatetime->format('Y');
            }
        }   else {
            if($newDatetime->format('Y') == date('Y')) {
                return $album_data = $newDatetime->format('d M');
            } else {
                return $album_data = $newDatetime->format('d M') . " " . $newDatetime->format('Y');
            }
        }
    }

    public static function getTimeDiff($timestamp) {
        $seconds = time()-$timestamp;
        $howLongAgo = "";
        $days = intval(intval($seconds) / (3600*24));
        if($days> 0)
            $howLongAgo .= str_replace(' ', '', "$days d").' ';
        $hours = (intval($seconds) / 3600) % 24;
        if($hours > 0)
            $howLongAgo .= str_replace(' ', '', "$hours h").' ';
        $minutes = (intval($seconds) / 60) % 60;
        if($minutes > 0)
            $howLongAgo .= str_replace(' ', '', "$minutes m").' ';
        $seconds = intval($seconds) % 60;
        if ($seconds > 0)
            $howLongAgo .= str_replace(' ', '', "$seconds s").' ';

        return $howLongAgo;
    }

    public static function createSlug($str) {
        $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', '-', $str);
        $str = preg_replace('/(' . preg_quote('-', '/') . '){2,}/', '$1', $str);
        $str = trim($str, '-');
        return mb_strtolower($str, 'UTF-8') ?? $str;
    }
}