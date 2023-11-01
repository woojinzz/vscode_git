<?php 
    include "lib.php"; 

    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($conn, $idx);

    $query = "SELECT * FROM sing_board WHERE idx = '$idx' ";
    $resutl = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($resutl);


?>

<form action="writePost.php" method="POST">
    <table width="800" border="1" cellpadding="5">
        <tr>
            <th>이름</th>
            <td><?php echo $data['name'] ?></td>
        </tr>
        <tr>
            <th>제목</th>
            <td><?php echo $data['subject'] ?></td>
        </tr>
        <tr>
            <th>내용</th>
            <td><?php echo $data['memo'] ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <div style="text-align: center;">
                    <input type="submit" value="저장">
                </div>
            </td>
        </tr>
    </table>
</form>