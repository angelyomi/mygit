<?php
    $con = mysqli_connect("localhost", "root", "qwer", "project_db");
    mysqli_query($con,'SET NAMES utf8');	
	
//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
	session_start();
  }
  $id = $_SESSION['id'];
?>
    
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>diary</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Song+Myung&display=swap" rel="stylesheet">

    <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square.css" rel="stylesheet">

    <link rel="stylesheet" href="css/pro_home.css"/>


    <style>
      
body{        
  background-image: url("images/ppp.jpg");
  background-size: 100%;
  background-position: top,center;
  background-repeat : no-repeat;
  background-color:rgb(191, 126, 98);
}

  
  </style>
</head>
<body>
<div class="image">
        <div style="float:left; font-family: 'NanumSquareBold';"><?php echo 'ID : '.$id?></div>
        <br>
        <br>

        <h1 class ="home_title" style="animation: fadein 2s;">Dear. diary</h1>
        <h4 class="paragraph_header" style="font-family: 'Song Myung', serif;">

          <div style="text-align:center;">
              <div style="display:inline-block; padding:5px 50px; animation: fadein 2s;"><a href="pro_main.php" id="home_inline">MAIN</a></div>
              <div style="display:inline-block; padding:5px 50px; animation: fadein 2s;"><a href="pro_home.php" id="home_inline">DIARY</a></div>
              <div style="display:inline-block; padding:5px 50px; animation: fadein 2s;"><a href="pro_saying.php" id="home_inline">QUOTE</a></div>
              <div style="display:inline-block; padding:5px 50px; animation: fadein 2s;"><a href="pro_diet.php" id="home_inline">DIET</a></div>
          </div>

        </h4> 
         
    </div>
    
      <div style="background-color:white; margin:15px; height: 550px; padding:20px 20px">
	<!-- 파일 업로드를 위해 enctype 추가 -->
    <form name="fileUpload" action="pro_write_ok2.php" method="post" enctype= "multipart/form-data" >
        <br>
        <div class="write">
            <input id = "write_title" style ="padding:15px 15px;"name ="title" type = "text" placeholder = "제목"/>
            <br><br>
            <textarea id = "write_content" style ="padding:15px 15px;"name ="content"  placeholder = "내용"></textarea>
            <br><br><br>

            <!-- 사진 업로드 -->
            <input type="file" id="file" name="imgFile">
            
            <button type="submit" class="btn_p" > UPLOAD </button> 
            <button type="button" class="btn_b" onclick="location.href='pro_home.php'; return false;"> CANCEL </button>  
        </div>
      </div>
</body>
</html>