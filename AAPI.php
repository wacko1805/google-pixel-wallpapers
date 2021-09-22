<?php
$dir_name = "AAPI/";
$images = glob($dir_name."*.png");

foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "AAPI herritage Day"},';
} 
?>