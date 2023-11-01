<?php
//include 'test.php';

$db_host="localhost";	//DB서버 주소를 입력
$db_user="root";	//접속할 ID
$db_password="qwer";	// 접속할 ID의 패스워드
$db_name="test";	// 특별히 사용할 DB가 있다면 DB명을 넣음

$con=mysqli_connect($db_host, $db_user, $db_password, $db_name) or die("실패");
    var_dump($_POST);
    $sql = "INSERT INTO topic(title, desctiption, created)

                VALUES(
                        '{$_POST['title']}',
                        '{$_POST[ddesctiption]}',NOW()

                )
            ";
    $result = mysqli_query($con,$sql);


    if($result === false) {

        echo "에러";
        error_log(mysqli_error($con));    
    }

    echo $sql;
                          

?>