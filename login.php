<?php
    session_start();
    include 'vendor/autoload.php';
    include 'call.php';

    $login = call('Login', 'getToken', $_GET);


?>
<pre>
<?php    print_r($login); ?>

    Сайт находится в разработкуе до 10 февраля 2019 года.
    Список задач для конкурса можете посмотреть на странице
    <a href="https://www.videosharp.info/console/book">https://www.videosharp.info/console/book</a>
</pre>