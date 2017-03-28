<?php

namespace vendor\libs;

use config\ConfigDB;

/**
 * Description of Db
 *
 */
class DB extends \PDO{

    public static $Connection;
    public static $AConnection;
    public static $CConnection;
    public static $WConnection;

    private static $SelectedConnection;

    public function __construct()
    {
        try
        {
            $options = [
            \PDO::ATTR_PERSISTENT => false,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ];
            DB::$Connection = new \PDO("mysql:host=".ConfigDB::$wow['host'].";dbname=".ConfigDB::$wow['database'].";charset=".ConfigDB::$wow['encoding'], ConfigDB::$wow['username'], ConfigDB::$wow['password'], $options);
            DB::$Connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            DB::$AConnection = new \PDO("mysql:host=".ConfigDB::$auth['host'].";dbname=".ConfigDB::$auth['database'].";charset=".ConfigDB::$auth['encoding'], ConfigDB::$auth['username'], ConfigDB::$auth['password'], $options);
            DB::$AConnection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            DB::$CConnection = new \PDO("mysql:host=".ConfigDB::$characters['host'].";dbname=".ConfigDB::$characters['database'].";charset=".ConfigDB::$characters['encoding'], ConfigDB::$characters['username'], ConfigDB::$characters['password'], $options);
            DB::$CConnection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            DB::$WConnection = new \PDO("mysql:host=".ConfigDB::$world['host'].";dbname=".ConfigDB::$world['database'].";charset=".ConfigDB::$world['encoding'], ConfigDB::$world['username'], ConfigDB::$world['password'], $options);
            DB::$WConnection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "<pre>";
            print_r($e->getMessage());
            die();
        }
    }
}