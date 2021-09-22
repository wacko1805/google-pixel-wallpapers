<?php
$dir_name = "earth-day/";
$images = glob($dir_name."*.png");

foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "Earth Day"},';
} 
?>