<?php
$ip =(isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);

$json = ['ip' => $ip];

header('Content-Type: application/json');
echo json_encode($json);
