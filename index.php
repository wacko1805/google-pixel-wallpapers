<?php 
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
$url = "https://raw.githubusercontent.com/wacko1805/google-pixel-wallpapers/main";
$imagecount = count(glob("*/*.{jpg,png,gif,jpeg}", GLOB_BRACE));
$arr =  array(
    "info" => array (
        "Title" => "Pixel Wallpapers", 
        "Api Link" => "https://github.com/wacko1805/google-pixel-wallpapers", 
        "Created by" => "Jack Sam",
        "Imagecount" => "$imagecount",
    ));
echo "[";
echo json_encode($arr);
echo ",";
include('Motif.php');
include('P6l.php');
include('P6a.php');
include('p6.php');
include('a12.php');
include('p5a.php');
include('p5.php');
include('p4.php');
include('p4a.php');
include('pride.php');
include('hhm.php');
include('iwd.php');
include('bhm.php');
include('ed.php');
include('AAPI.php');
include('ifd.php');
include('ipan.php');
include('aosp.php');
include('ac.php');
include('sop.php');
echo '{"":""}';
echo "]";
