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


$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$hp = $_POST['hp'];
$email = $_POST['email'];

    //쿼리문 실행
    $query1 = "select * from member_tb where id='$id'";
    $result1 = mysqli_query($connect, $query1); 
    $row1 = mysqli_fetch_array($result1);


if(!$id || !$pw || !$email || !$name || !$hp){

    echo "<script>alert('빈 칸을 모두 입력하시오.')</script>";
    echo ("<script>history.back();</script>");
    
    }




    // 중복아이디가 없을경우
    if($row1['id']!=null){ // 중복아이디가 있을경우
      
        echo "<script>window.alert('중복된 아이디가 있습니다.');</script>"; 
        echo "<script>history.back();</script>";  
     
     }else if($row1['id']==null){ 

    // 회원가입하기
    $query2 = "INSERT INTO member_tb
    (id, pw, name, hp, email) VALUES('$id','$pw','$name', '$hp', '$email')";
    $result2 = mysqli_query($connect, $query2);     
    if($result2 != 1)
    {
        echo "<script>alert('저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요');</script>"; 
        //echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        echo "<script>history.back();</script>";   
        error_log(mysqli_error($connect));
    }else{
        //echo '성공했습니다. <a href="login.php">로그인하기..</a>';
        echo "<script>alert('회원가입 되었습니다.');</script>"; 
        echo "<script>location.href='pro_main.php';</script>";
    }

     }
     

?>