<?php
    include 'call.php';
    $task = call(
        'Task',
        'getTaskInfo',
        ['taskId' => $_GET['taskId']])->task;

    $langs = call(
        'Task',
        'getLangList')->langs;

    include 'libs/Smarty.class.php';
    $smart = new Smarty();
    $smart->assign('task', $task);
    $smart->assign('langs', $langs);
    $smart->display('task.tpl');
