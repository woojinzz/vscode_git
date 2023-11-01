<?php

error_reporting(E_ALL); // 모든 PHP 오류를 표시
ini_set("display_errors", 1);

$conn = mysqli_connect("localhost", "root", "qwer", "test");

    if (mysqli_connect_error()) {
        die("DB 접속 오류: " . mysqli_connect_error());
    }

    



?>