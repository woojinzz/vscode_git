<?php

include 'inc_header.php'; 

if(!isset($_POST['chk']) || $_POST['chk'] != 1) {
    //die("<script> alert('약관을 동의해 주세요'); self.location.href = './stipluation.php'; </script>");

}

?>

<main class="w-50 mx-auto border rounded-5 p-5">
    <h1 class = "text-center">회원가입</h1>

    <div class="d-flex gap-2 align-items-end">
        <div>
            <label for="f_id" class="form-lebel">아이디</label>
            <input type="text" readonly class="form-control" id="f_id" placeholder="아이디를 입력해주세요">
        </div>
        <button class="btn btn-secondary">아이디 중복확인</button>
    </div>

    <div class="d-flex mt-3 gap-2 justify-content-between">
        <div class="w-50">
            <label for="f_password1" class="form-lebel">비밀번호</label>
            <input type="password" readonly class="form-control" id="f_password1" placeholder="비밀번호 입력해주세요">
        </div>

        <div class="w-50">
            <label for="f_password2" class="form-lebel">비밀번호 확인</label>
            <input type="password" readonly class="form-control" id="f_password2" placeholder="비밀번호 확인을 입력해주세요">
        </div>
    </div>

    <div class="d-flex mt-2 gap-2 align-items-end">
        <div class="flxe-grow-1">
            <label for="f_eamil" class="form-lebel">이메일</label>
            <input type="text" readonly class="form-control" id="f_eamil" placeholder="이메일을 입력해주세요">
        </div>
        <button class="btn btn-secondary">이메일 중복확인</button>
    </div>

    <div class="d-flex gap-2 mt-3 align-items-end">
        <div>
            <label for="f_zipcode">우편번호</label>
            <input type="text" name="zipcode" class="form-control" maxlength="5" minlength="5">
        </div>
        <button class="btn btn-secondary">우편번호 찾기</button>
    </div>

    <div class="d-flex mt-3 gap-2 justify-content-between">
        <div class="w-50">
            <label for="f_addr1" class="form-lebel">주소</label>
            <input type="text" readonly class="form-control" id="f_addr1" placeholder="주소를 입력해주세요">
        </div>

        <div class="w-50">
            <label for="f_addr2" class="form-lebel">상세주소</label>
            <input type="text" readonly class="form-control" id="f_addr2" placeholder="상세주소를 입력해주세요">
        </div>
    </div>
    
    <div class="mt-3 d-flex gat-5">
        <div>
            <label for="f_photo" class="form-lable">프로필이미지</label>
            <input type="file" name = "profile" id="f_photo" class="form-control">
        </div>
        <img src="images/person-icon.png" class="w-25" alt="profile image">
    </div>

    <div class="mt-3 d-flex gap-2">
        <button class="btn btn-primary w-50">가입확인</button>
        <button class="btn btn-secondary w-50">가입취소</button>
    </div>


 
</main>

<?php include 'inc_footer.php'; ?>