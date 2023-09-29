<?php

session_start();
require_once('database.php');

$_SESSION = array();


session_destroy();


header("Location: login.html");
exit;
?>