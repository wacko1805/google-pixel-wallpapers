<?php
$dir_name = "android12/";
$images = glob($dir_name."*.jpg");

foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "Android 12"},';
} 
?>