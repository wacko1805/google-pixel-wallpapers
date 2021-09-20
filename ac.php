<?php
$dir_name = "arts-and-culture/";
$images = glob($dir_name."*.jpg");
foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "arts-and-culture"},';
} 
?>
