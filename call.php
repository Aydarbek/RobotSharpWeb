<?php

define('HOST_API', 'http://RobotSharpApi/');

function call($class, $method, $params = [])
{
    $url = HOST_API . 'index.php' .
            '?class=' . $class .
            '&method=' . $method;

    foreach ($params as $name => $value)
        $url .= '&' . $name . '=' . urlencode($value);

    $json = file_get_contents($url);
    return json_decode($json);
}