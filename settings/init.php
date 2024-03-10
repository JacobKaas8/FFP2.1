<?php
require "classes/classDB.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_STRICT);


define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "mysql6.unoeuro.com"; //localhost
    $DB_NAME = "jerytter_dk_db_interdisplay"; //interdisplay
    $DB_USER = "jerytter_dk"; // root
    $DB_PASS = "B4GFzek5wb2aREp6yhAn"; // ikke noget her!
}else{
    $DB_SERVER = "";
    $DB_NAME = "";
    $DB_USER = "";
    $DB_PASS = "";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);
