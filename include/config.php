<?php
require_once 'DatabaseConfiguration.php';
class Config {
    private static $dbHost = 'localhost';
    private static $dbName = '1blog';
    private static $dbUser = 'root';
    private static $dbPassword = '';

    public static function getHost() {
        return self::$dbHost;
    }

    public static function getDBName() {
        return self::$dbName;
    }

    public static function getUser() {
        return self::$dbUser;
    }

    public static function getPassword() {
        return self::$dbPassword;
    }
}
?>
