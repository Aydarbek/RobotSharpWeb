<?php
    include 'vendor/autoload.php';
    include 'call.php';
    $task = call(
        'Task',
        'getTaskInfo',
        ['taskId' => $_GET['taskId']])->task;

    $langs = call(
        'Task',
        'getLangList')->langs;

    $prog = call(
        'Task',
        'getUserSource',
        [
            'userId' => $_GET['userId'],
            'taskId' => $_GET['taskId'],
            'langId' => $_GET['langId']
        ])->prog;

    $smart = new Smarty();
    $smart->assign('task', $task);
    $smart->assign('langs', $langs);
    $smart->assign('prog', $prog);
    $smart->display('prog.tpl');
