<?php
    $json = file_get_contents('http://robot-api/index.php?class=Task&method=getTaskList');
    $tasks = json_decode($json)->tasks;

    include 'libs/Smarty.class.php';
    $smart = new Smarty();
    $smart->assign('tasks', $tasks);
    $smart->display('list.tpl');