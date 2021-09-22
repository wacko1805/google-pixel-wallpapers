<?php
$dir_name = "international-freindship-day/";
$images = glob($dir_name."*.png");

foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "International Friendship Day"},';
} 
?>