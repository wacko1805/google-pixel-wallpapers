<?php
$dir_name = "indiginous peoples and nature/";
$images = glob($dir_name."*.png");

foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "indiginous peoples and nature"},';
} 
?>