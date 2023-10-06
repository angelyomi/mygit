<?php
    $con = mysqli_connect("localhost", "root", "qwer", "project_db");
    mysqli_query($con,'SET NAMES utf8');	
	
//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
	session_start();
  }

  $id = $_SESSION['id'];
  $idx = $_GET['idx']; 

  $sql = "select * FROM diet_tb where idx = '$idx'";        
  $result = mysqli_query($con, $sql); 
  $row = mysqli_fetch_array($result);

 
    $morning = $row['morning'];    
    $lunch = $row['lunch'];  
    $dinner = $row['dinner']; 
     // 날짜 포맷 
     $regdate = $row['date_reg'];
     $date = date_create($regdate);
     $_date = date_format($date, "Y.m.d");

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
    <link rel="stylesheet" href="css/pro_main.css"/>
    <style>
    
    .login_main {

background: #feaf87;
box-shadow: 0px 5px 0px 0px #d07d4d;
}

.login_main:hover  {
box-shadow: 0px 0px 0px 0px #d07d4d;
margin-top: 15px;
margin-bottom: 5px;
}  
  .login_main {

    display: block;
    position: relative;
    float: left;
    width: 70px;
    padding: 0;
    margin: 10px 20px 10px 0;
    font-weight: 600;
    text-align: center;
    line-height: 30px;
    color: #FFF;
    border-radius: 5px;
    transition: all 0.2s ;
    text-decoration-line: none;
    font-size : 10pt;
  }

  button{ 
    border:none;
  }

  .home_diet{

    padding:  0.5rem 5rem 0.5rem 5rem;
  }
  
  
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
        <div style="float:left; font-family: 'NanumSquareAcr;"><?php echo 'ID : '.$id?></div>
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
    
    <div style="background-color:white; margin:15px; height:24rem; padding:20px 20px">
        <h2 class = "diary_date" style="text-align:center; color:rgb(77,77,77);">오늘의 식단을 입력하세요. </h2>
      
        
  <hr style="width: 14rem;">
   <br>
        <br>
    <form name="Upload" action="pro_diet_modify_ok.php?idx=<?php echo $idx?>" method="post" >
      <div id="container_diet_input" >

    
            <input class="diary_title" type = "text" name="morning" placeholder = "<?=$morning?>">
            <br>
            <input class="diary_title" type = "text" name="lunch" placeholder = "<?=$lunch?>">
            <br>
            <input class="diary_title" type = "text" name="dinner" placeholder = "<?=$dinner?>">  
      </div>    
      
      <div>
    <button type="submit" class="login_main" style="float:right">UPLOAD</button>
    <button type="button" class="login_main" onclick="location.href='pro_diet.php'; return false;" style="float:right"> CANCEL </button>   
        
      </div>

</body>
</html>