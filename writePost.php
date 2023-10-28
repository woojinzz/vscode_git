<?php
include "lib.php";

// $db_host="localhost";	//DB서버 주소를 입력
// $db_user="root";	//접속할 ID
// $db_password="qwer";	// 접속할 ID의 패스워드
// $db_name="test";	//

// $conn=mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("데이터베이스 연결 실패: " . mysqli_connect_error());
}

// 폼에서 제출된 데이터 가져오기
$name = mysqli_real_escape_string($conn, $_POST['name']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$memo = mysqli_real_escape_string($conn, $_POST['memo']);

var_dump($_POST);

$regdate = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR']; 

$query = "INSERT INTO sing_board(name, subject, memo, regdate, ip)
            VALUES('$name', '$subject', '$memo', '$regdate', '$ip')";

echo "실행된 SQL 쿼리: " . $query;

if (mysqli_query($conn, $query)) {
    echo "데이터가 성공적으로 추가되었습니다.";
} else {
    echo "데이터 추가 중 오류 발생: " . mysqli_error($conn);
}

//header("list.php");
mysqli_close($conn);
?>