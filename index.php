<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>예약</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
</head>
<body>

<form  name = "frm" method = "POST" action = "login_ok.php">
  아이디 : <input type="text" id="userid" name="userid"><br>
  패스워드 : <input type="password" id="userpw" name="userpw">
</form>

<button onclick="javascript:goLogin();">로그인</button>
  
</body>
</html>

<script>

  function goLogin() {
    
    var frm = document.frm;
    if(!$.trim(frm.userid.value)) { // 공백을 제거
      alert("아이디를 입력해주세요");
      frm.userid.focus(); // 커서 이동
      return false; //함수 중단
  
    }
    if(!$.trim(frm.userpw.value)) {
      alert("비밀번호를 입력해주세요");
      frm.userpw.focus();
      return false;
  
    }
    frm.submit();
   

  }
</script>