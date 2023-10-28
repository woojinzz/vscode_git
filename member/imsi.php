<?php

include 'inc/dbconfig.php';
include 'inc/member.php';

//id 중복 test

$id = test;
$mem = new Member($db);

if($mem->id_exists($id)) {
    echo "중복";
}else {
    echo "사용가능";
}