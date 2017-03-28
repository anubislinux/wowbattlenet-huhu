<?php

namespace vendor\interfaces;

interface DB_Interface {
    public static function LoadConfigs();
    public static function ConnectToAllDBs();
    public static function ConnectToDB($database_type, $realm_id = 1, $add = true, $return = false);
    public static function CloseConnection($database_type, $realm_id = 1);
    public static function IsConnected($database_type);
}