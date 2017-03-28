<?php

namespace vendor\core\base;

use vendor\libs\{DB, Lang};

/**
 * Description of Model
 *
 */
abstract class Model {
    
    public static $DBConnection;
    public static $AuthConnection;
    public static $CharConnection;
    public static $WConnection;
    public static $TM;

    public function __construct()
    {
        Model::$DBConnection = DB::$Connection;
        Model::$AuthConnection = DB::$AConnection;
        Model::$CharConnection = DB::$CConnection;
        Model::$WConnection = DB::$WConnection;
    }
}
