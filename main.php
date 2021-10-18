<?php
$opts = [
    'http' => [
            'method' => 'GET',
            'authorization' => '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',
            'header' => [
                'Accept: application/vnd.github.v3+json',
                'Authorization: token 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',
                    'User-Agent: Wacko1805'
            ]
    ]
];
$url_base = "https://raw.githubusercontent.com/wacko1805/Google-Pixel-Wallpapers-images/main";
$img_name_full = $img_name;
$context = stream_context_create($opts);

// Read JSON file
$json_data = file_get_contents($img_name_full, false, $context);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$user_data = $response_data->tree;

// Cut long data into small & select only first 10 records
$user_data = array_slice($user_data, 0, 9);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
foreach ($user_data as $user) {

    $name_raw = $user->path;
    $name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $name_raw);
    $url = $dir_name . $user->path;
	
    echo '{"name": "'.$coll.' '.$name.'", "url": "'.$url_base.'/'.$url.'", "collections": "'.$coll.'"},';

}

?>