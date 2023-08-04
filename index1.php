<?php
$ch = curl_init();
echo '<pre>';
// curl_setopt($ch,CURLOPT_URL,'https://jsonplaceholder.typicode.com/todos');

$options = array(
    CURLOPT_URL => 'https://jsonplaceholder.typicode.com/todos',
    CURLOPT_RETURNTRANSFER => 1,
);
curl_setopt_array($ch, $options);

$response = curl_exec($ch);

curl_close($ch);
print_r($response);
?>