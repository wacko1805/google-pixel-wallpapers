<?php
$dir_name = "pixel-4a/";
$images = glob($dir_name."*.jpg");

foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "pixel 4a"},';
} 
?>
