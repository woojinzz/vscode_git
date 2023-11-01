<?php
    session_start();
    include "db.php";

    if(!$_POST["userid"] || !$_POST["userpw"]) {
        exit;
    }
    // var_dump($_POST['userid']);
    // var_dump($_POST['userpw']);
    $conn;
    mysqli_select_db($conn, $DB_SNAME);

    //var_dump($db_link);
    //print_r($db_link);

    $sql = "SELECT uid FROM tb_member_master WHERE user_id = '".$_POST["userid"]."' AND password='".$_POST["userpw"]."' ";
    //$sql = "SELECT uid FROM tb_member_masert WHERE user_id = ? AND password = ?";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    // var_dump($row);
    // exit;

    $loginID = "";
    if($row && $row["uid"]) {// 쿼리 정상 작동

        $loginID = $_POST['userid'];
    
    }
    if(!$loginID) {// 로그인 실패

        ?>
        <script>
            alert("잘못된 접근입니다.");
            history.back();
            
        </script>

        <?php
        exit;
    }
    else {// 로그인 성공

        echo "로그인 성공!";

        $_SESSION['sess_userid'] = $loginID;


    }

    mysqli_close($conn);

?>