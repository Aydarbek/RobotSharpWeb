<?php
    include 'vendor/autoload.php';
    include 'call.php';
    $task = call(
        'Task',
        'getTask',
        ['taskId' => $_GET['taskId']]);

    $langs = call(
        'Task',
        'getLangList');

    $smart = new Smarty();
    $smart->assign('task', $task);
    $smart->assign('langs', $langs);
    $smart->display('task.tpl');
