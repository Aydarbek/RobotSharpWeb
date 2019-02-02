<?php
    include 'vendor/autoload.php';
    include 'call.php';

    $tasks = call('Task', 'getTaskList');

    //include 'libs/Smarty.class.php';
    $smart = new Smarty();
    $smart->assign('tasks', $tasks);
    $smart->display('list.tpl');