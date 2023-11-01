<?php

// 컨트롤 + 쉬프트 + p 검색어 검색가능
// 들여쓰기 : 탭
// 내어쓰시 : 쉬프트 + 텝 
// 파일열기 : 컨트롤 + p 

// 파일 열기: Ctrl + P
// 현재 열려있는 파일 닫기 : Ctrl + W
// 열려있는 모든 파일 닫기 : Ctrl + Shift + W
// 파일 저장: Ctrl + S
// 탭 이동: Ctrl + Tab
// 이전에 사용한 파일 열기: Ctrl + Q
// 단어 단위로 커서 이동: Ctrl + Left Arrow / Ctrl + Right Arrow
// 라인 전체 선택: Ctrl + L
// 라인 삭제: Ctrl + Shift + K
// 줄 복사: Ctrl + D
// 전체 줄 복사: Ctrl + Shift + L
// 문장 단위 주석: Ctrl + /
// Command Palette를 오픈 : Ctrl + Shift + P
// 전체 디렉토리에서 '파일명' 검색 : Ctrl + P
// 최근에 열었던 파일들간 이동 : Ctrl + Shift + Tab
// 열려있는 모든 파일 사이에서 이동 : Ctrl + Tab 
// 현재 파일을 두 개의 세로 분할 패널로 나눠줌 : Ctrl + \
// 열려있는 파일을 숫자키로 이동 : Ctrl + 1~9 
// Ctrl + Shift + [ or ] : 코드를 왼쪽( [ ) 혹은 오른쪽( ] )으로 들여쓰기 




   $db_host="localhost";	//DB서버 주소를 입력
   $db_user="root";	//접속할 ID
   $db_password="qwer";	// 접속할 ID의 패스워드
   $db_name="test";	// 특별히 사용할 DB가 있다면 DB명을 넣음
   $con=mysqli_connect($db_host, $db_user, $db_password, $db_name);	// 변수 $con에 db접속 내장함수와 (인자값 들)을 저장
   if ( mysqli_connect_error($con) ) {	// DB접속 했을 때 오류가 발생한다면
	   echo "MariaDB 접속 실패 !!", "<br>";	// 출력
	   echo "오류 원인 : ", mysqli_connect_error();	// mysqli_connet_error() 내장함수는 DB서버 연결 오류 원인을 반환해주는 함수
	   exit();
   }
   echo "MariaDB 접속 완전히 성공!!";	// 에러가 없을 시 출력
   mysqli_close($con);	// 
?>