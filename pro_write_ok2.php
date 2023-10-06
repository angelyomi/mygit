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
 $title = $_POST['title'];
 $content = $_POST['content'];
 
 //제목
 if($title==null){
     echo "<script>alert('제목을 입력하시오.')</script>";
     echo "<script>history.back();</script>"; 
     return;      
 }

 //내용
 if($content==null){
     echo "<script>alert('내용을 입력하시오.')</script>";
     echo "<script>history.back();</script>";  
     return;     
 }
 if($id==null){
     echo "<script>alert('아디비어있음 ㅠ ')</script>";
     echo "<script>history.back();</script>"; 
     return;      
 }


    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';

    // 임시 저장된 정보
    $myTempFile = $_FILES['imgFile']['tmp_name'];


    // 파일명을 기존의 파일명을 그대로 쓰고 싶은 경우
    $fileName = $_FILES['imgFile']['name'];
    // 파일 타입 및 확장자 구하기
    $fileTypeExtension = explode("/", $_FILES['imgFile']['type']);

    // 파일 타입
    $fileType = $fileTypeExtension[0];
    // 파일 확장자
    $extention = $fileTypeExtension[1];

    // 확장자 검사
    $isExtGood = false;

    if($myTempFile==null){
    }
    else{

    switch ($extention) {

      case 'jpeg':
      case 'bmp':
      case 'gif':
      case 'png':
        $isExtGood = true;
        break;
      default:
        echo "허용하는 확장자는 jpg, bmp, gif, png 입니다. - switch";
        echo $_FILES.'- switch'.
        
        exit;
        break;
    }

    // 이미지 파일이 맞는지 확인
    if ($fileType  == 'image') {
      // 허용할 확장자를 jpg, bmp, gif, png로 정함, 그 외는 업로드 불가
      if ($isExtGood) {
        // 임시 파일 옮길 폴더 및 파일명
        $myFile = "image/{$fileName}";
        // 임시 저장된 파일을 우리가 저장할 장소 및 파일명으로 옮김
        $imageUpload = move_uploaded_file($myTempFile, $myFile);

        // 업로드 성공 여부 확인
        if ($imageUpload == true) {
          echo "파일이 정상적으로 업로드 되었습니다. <br>";
          echo "<img src='{$myFile}' width='200' />";
        }
      }
      // 확장자가 jpg, bmp, gif, png가 아닐때
      else {
        echo "허용하는 확장자는 jpg, bmp, gif, png 입니다. - else";
        exit;
      }
    }
    // type이 image가 아닐때
    else {
      echo "이미지 파일이 아닙니다.";
      exit;
    }
 $photo=$myFile;
}
   


 //쿼리문 실행
 $query = "INSERT INTO diary_tb
 (id, title, content, date_reg, photo) VALUES('$id','$title','$content',now(),'$photo')";
 $result = mysqli_query($connect, $query);     
 if($result != 1)
 {
     echo "<script>alert('저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요');</script>"; 
     //echo '글등록 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
     echo "<script>history.back();</script>";   
     error_log(mysqli_error($connect));
 }else{
     //echo '성공했습니다. <a href="login.php">로그인하기..</a>';
     echo "<script>alert('다이어리 등록 완료');</script>"; 
     echo "<script>location.href='pro_home.php';</script>";
 }


?>


