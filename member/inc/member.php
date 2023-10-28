<?php 
//member class file
include 'inc/dbconfig.php';

class Member {
    //맴버변수, 프로퍼티
    private $conn;
    
    //생성자 접근가능
    public function construct($db) {
        $this->conn = $db;
    }

    //아이디 중복체크용 멤버 함수, 메소드
    public function id_exists($id) {

        $sql = "SELECT * FROM member WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();

        return $stmt->rowCount() ? true : false;

    }
}


?>