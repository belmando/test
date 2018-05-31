<?php


$data = [
    'u' => 3,
    'f' => 3,
    's',
    'c' => 0,
    'm' => 0,
    'act' => 'sub',
    'v' => 2,
    'fullname' => 'Тест Повторный',
    'phone' => '0631234567',
    'email' => 'test1@email.com',
    'jsonp' => true
];

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

$link = 'https://landscapesco.activehosted.com/proc.php';

$context  = stream_context_create($options);

$result = @file_get_contents($link, false, $context);

var_dump($result);