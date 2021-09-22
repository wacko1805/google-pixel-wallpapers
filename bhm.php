<?php
$dir_name = "black-history-month/";
$images = glob($dir_name."*.jpg");

foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "Black History Month"},';
} 
?>
