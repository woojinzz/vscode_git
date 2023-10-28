<?php include "lib.php"; ?>


    <table width="800" border="1">

        <tr>
            <th>No</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성시간</th>
        </tr>
<?php
    $query = "SELECT * FROM sing_board ORDER BY idx DESC";
    $resull = mysqli_query($conn, $query);

    while($data = mysqli_fetch_array($resull)) {
?>

        <tr>
            <td><?= $data['idx'] ?></td>
            <td><a href="view.php?idx=<?= $data['idx'] ?>"><?= $data['subject'] ?></a></td>
            <td><?= $data['name'] ?></td>
            <td><?= substr($data['regdate'], 0, 10) ?></td>
        </tr>



<?php } ?>
     
     

        
    </table>
