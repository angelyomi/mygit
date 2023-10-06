<?php

 
  session_start(); // 세션시작
 //데이타베이스 정보
 $db_host = "localhost";
 $db_user = "root";
 $db_password = "qwer";
 $db_name = "project_db";
 $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
 if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력


$id = $_POST['id'];
$pw = $_POST['pw'];

    if(!$id){

        echo "<script>alert('아이디를 입력하세요.')</script>";
        echo ("<script>history.back();</script>");
        
        }
    else if(!$pw){

        echo "<script>alert('비밀번호를 입력하세요.')</script>";
        echo ("<script>history.back();</script>");
        
        }

    $query = "select * from member_tb where id='$id' and pw='$pw'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_fetch_array($result);

if( $id==$row['id'] && $pw==$row['pw'] ){

    $_SESSION['id']=$row['id'];
    echo "<script>alert('로그인🔐')</script>";
    echo ("<script>location.href='pro_main.php';</script>");

    }
    else {echo "<script>alert('다시 입력하세요.')</script>";
        echo ("<script>history.back();</script>");}


echo '아이디 : '.$id.'</br>';
echo '비밀번호 : '.$pw.'</br>';


?>