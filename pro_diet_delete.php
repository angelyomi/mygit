<?php
    $con = mysqli_connect("localhost", "root", "qwer", "project_db");
    mysqli_query($con,'SET NAMES utf8');	
	
//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
	session_start();
  }
  $id = $_SESSION['id'];
  $idx = $_GET['idx'];  

  $sql = "DELETE FROM diet_tb where idx = '$idx'";        
  $result = mysqli_query($con, $sql); 
  if($result != 1)
 {
     echo "<script>alert('저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요');</script>"; 
     //echo '글등록 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
     echo "<script>history.back();</script>";   
     error_log(mysqli_error($connect));
 }else{
     //echo '성공했습니다. <a href="login.php">로그인하기..</a>';

     //echo "<script>location.href='pro_home.php';</script>";
     echo "<script>history.back();</script>";
 }


?>