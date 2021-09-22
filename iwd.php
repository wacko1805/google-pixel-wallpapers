<?php
$dir_name = "womans-day/";
$images = glob($dir_name."*.jpg");

foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "International Womans Day"},';
} 
?>