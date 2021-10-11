<?php
$server="localhost";//主機
$db_username="root";//你的資料庫使用者名稱
$db_password="";//你的資料庫密碼
$db_name = "login";
if(!@mysql_connect($server, $db_username, $db_password))
	die("Can not connect to the database");
//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db($db_name))
	die("Can not use the database");
?>