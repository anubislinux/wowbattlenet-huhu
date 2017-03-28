<?php

namespace vendor\libs;

class Utils {

    public static function getCheckUpdates() {
        header("Content-type: text/html; charset=utf-8");
        $data = file_get_contents("https://wowlegions.ru/extras/updates.php?version_id=".$_REQUEST['versionid']."&key=key");
        if ( !$data ) echo $lang['no_update']; else {
            if (strtolower("utf-8") == "utf-8") {
                if( function_exists( 'mb_convert_encoding' ) ) {
                    $data = mb_convert_encoding( $data, "utf-8", "windows-1251" );
                } elseif( function_exists( 'iconv' ) ) {
                    $data = iconv("windows-1251", "utf-8", $data);
                }
            }
            echo $data;
        }
    }

    public static function getFactionId($raceID) {
        $horde_races    = [2, 8, 6, 5, 10, 9, 25];
        $alliance_races = [11, 3, 7,  1,  4, 22, 25];
        if(in_array($raceID, $horde_races)) {
            return 1;
        }
        elseif(in_array($raceID, $alliance_races)) {
            return 0;
        }
        else {
            return false;
        }
    }

}