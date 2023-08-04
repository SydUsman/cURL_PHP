<?php
$ch = curl_init();

$myFile = fopen('file.txt', 'w');

curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/todos");
curl_setopt($ch, CURLOPT_FILE, $myFile);
curl_exec($ch);
curl_close($ch);
?>