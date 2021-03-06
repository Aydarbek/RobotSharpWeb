<?php

include_once 'config.php';

function call($class, $method, $params = [])
{
    $url = HOST_API . 'index.php' .
            '?class=' . $class .
            '&method=' . $method;

    foreach ($params as $name => $value)
        $url .= '&' . $name . '=' . urlencode($value);

    $json = file_get_contents($url);
    $obj = json_decode($json);
    echo "<!-- get $url\n" . var_export($obj, true) . " -->";
    if ($obj->error == 'ok')
        return $obj->answer;
    die ($obj->error);
}