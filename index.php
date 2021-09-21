<?php 
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'];
echo "[";
include('aosp.php');
include('p6.php');
include('p5.php');
include('p4.php');
include('p4a.php');
include('ac.php');
include('sop.php');
echo '{"":""}';
echo "]";





