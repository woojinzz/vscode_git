<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password ="qwer";
    $db_name = "test";

    $con = mysqli_connect($db_user, $db_user, $db_password, $db_name);

    if(mysqli_connect_error($con)) {
        echo "실패","<br>";
        echo "원인", mysqli_connect_error();
        exit;

    }
    echo "성공";
    mysqli_close($con);



?>