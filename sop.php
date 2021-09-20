<?php
$dir_name = "shot-on-pixel/";
$images = glob($dir_name."*.jpg");

foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "shot on pixel"},';
} 
?>
