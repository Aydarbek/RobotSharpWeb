<?php
    session_start();
    include 'vendor/autoload.php';
    include 'call.php';

    $user = call('User', 'joinUser', $_GET)->user;
    $_SESSION['user'] = $user;

    print_r($user);