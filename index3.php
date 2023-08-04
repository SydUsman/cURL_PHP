<?php
$ch = curl_init();

$data = array(
    "userId"=> 1,
    "id"=> 2,
    "title"=> "qui est esse",
    "body"=> "ASDASD"
);

$options = array(
    CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS=> $data
);
curl_setopt_array($ch, $options);

curl_exec($ch);
curl_close($ch);
?>