<?php
    session_start();
    include 'vendor/autoload.php';
    include 'call.php';

    $login = call('Login', 'getToken', $_GET);

    if ($login->error == 'ok') {
        $token = $login->token;
        if ($login->userId)
            $userId = $login->userId;
        else
        {
            $join = call('User', 'joinUser',
                [
                    'token' => $token,
                    'email' => $_GET['email'],
                    'name' => $_GET['name']
                ]);
            $userId = $join->userId;
        }
    }

?>
<pre>
<?php    print_r($login); ?>

    UserId: <?= $userId ?>

    Сайт находится в разработке до 10 февраля 2019 года.
    <a href="https://www.robotsharp.info/list.php">Перейти к списку задач</a>.

    Решать задачи можно пока только на центральном проекте:
    <a href="https://www.videosharp.info/console/book">https://www.videosharp.info/console/book</a>
</pre>