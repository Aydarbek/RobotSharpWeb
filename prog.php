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

    $prog = call(
        'Task',
        'getProg',
        [
            'userId' => $_GET['userId'],
            'taskId' => $_GET['taskId'],
            'langId' => $_GET['langId']
        ]);

    $smart = new Smarty();
    $smart->assign('task', $task);
    $smart->assign('langs', $langs);
    $smart->assign('prog', $prog);
    $smart->display('prog.tpl');
