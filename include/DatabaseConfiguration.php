<?php
interface DatabaseConfiguration {
    public static function getHost();
    public static function getDBName();
    public static function getUser();
    public static function getPassword();
}
?>
