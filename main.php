<?php
$images = glob($dir_name."*.{jpg,png,gif}", GLOB_BRACE);

foreach($images as $image) {
    $name_raw = basename($image);
    $name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $name_raw);
   echo '{"name": "'.$coll.' '.$name.'", "url": "'.$url.'/'.$image.'", "collections": "'.$coll.'"},';
} 
?>