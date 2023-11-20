<?php

    session_start();

    $conn = mysqli_connect(
        'localhost',
        'root',
        '08647',
        'php_mysql_crud'
    ) or die(mysqli_erro($mysqli));

 #   if (isset($conn)) { echo 'DB is connected'; }

?>