<?php
    sleep(1);
    $partner = $_GET['partner'];
    $apikey = 'xxx';
    $time = $_GET['time'];
    $email = $_GET['email'];
    $name = $_GET['name'];
    $signUser = $_GET['sign'];
    $signHost = md5("$partner/$apikey/$time/$email");

    if ($signHost != $signUser)
        die('Sign incorrect');

    session_start();

    $_SESSION['email'] = $email;

    echo $email . " accepted ";