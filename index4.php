<?php

$data = array("name"=>"usman", "age"=>22);
$string = http_build_query($data);

$ch = curl_init('http://localhost/php_project/day_06_August03/data.php');

curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$string);
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

curl_exec($ch);
curl_close($ch);
?>