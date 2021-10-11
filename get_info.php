<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
$_SESSION['name'];
include_once('connect.php');//連結資料庫
$name = $_GET['name'];
?>