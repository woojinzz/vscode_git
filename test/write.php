<?php include "lib.php"; ?>

<form action="writePost.php" method="POST">
    <table width="800" border="1" cellpadding="5">
        <tr>
            <th>이름</th>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <th>제목</th>
            <td>
                <input type="text" name="subject" id="subject" style="width: 100%;">
            </td>
        </tr>
        <tr>
            <th>내용</th>
            <td>
                <textarea name="memo" id="memo" style="width: 100%; height: 300px;"></textarea>
            </td>
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