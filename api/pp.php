<?php
require 'load.php';
session_start();
set_time_limit(0);
error_reporting(E_ALL);

$username = $_GET["id"];

$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$pp=$ip->find("img[class='img-fluid w-100']",0)->src;
$_SESSION['username']=$username;
$_SESSION['pp']=$pp;
?>
