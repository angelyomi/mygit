<?php
 session_start(); // 세션시작
 include 'check.php';

 //데이타베이스 정보
 $db_host = "localhost";
 $db_user = "root";
 $db_password = "qwer";
 $db_name = "project_db";
 $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
 if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

 //form에서 전달받은 POST 데이타
 $id = $_SESSION['id'];
 $idx = $_GET['idx'];  
 $morning = $_POST['morning'];
 $lunch = $_POST['lunch'];
 $dinner = $_POST['dinner'];
 


 //쿼리문 실행
 $query = "UPDATE diet_tb SET morning='$morning',lunch='$lunch',dinner='$dinner' WHERE idx = '$idx'";
 $result = mysqli_query($connect, $query);
     
 if($result != 1)
 {
     echo "<script>alert('저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요');</script>"; 
     //echo '글등록 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
     echo "<script>history.back();</script>";   
     error_log(mysqli_error($connect));
 }else{
     //echo '성공했습니다. <a href="login.php">로그인하기..</a>';
     echo "<script>alert('다이어리 수정 완료');</script>"; 
     echo "<script>location.href='pro_diet.php';</script>";
 }


?>


