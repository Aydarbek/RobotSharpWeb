<?php
    include 'call.php';
    $tasks = call('Task', 'getTaskList')->tasks;

    include 'libs/Smarty.class.php';
    $smart = new Smarty();
    $smart->assign('tasks', $tasks);
    $smart->display('list.tpl');