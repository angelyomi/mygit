<?php
    $con = mysqli_connect("localhost", "root", "qwer", "project_db");
    mysqli_query($con,'SET NAMES utf8');	
	
//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
	session_start();
  }
  $id = $_SESSION['id'];
                                         
  $sql = "select * from saying_tb order by rand()"; 
  $result = mysqli_query($con, $sql); 
//$row = mysqli_fetch_array($result);  


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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
  
  body{        
    background-image: url("images/ppp.jpg");
    background-size: 100%;
    background-position: top,center;
    background-repeat : no-repeat;
    background-color:rgb(191, 126, 98);
  }

  #eng{
    font-family: 'Song Myung', serif;
    font-style: italic;}

    .dot{
      background-image: url("images/ok.png");
      background-size: 100%;

    }
    </style>
</head>
<body>

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
         

    
    <div style="background-color:white; margin:15px;padding:20px 20px;"> <br><br>
        
     
        <div class="center"><button  class="login_main" onclick="F5()" type="button" style="float:right">other</button></p>
        <?php
          $row = mysqli_fetch_array($result);
        ?> 

        <h2 style=" font-family: 'Song Myung', serif;">💌 Quote of the day 💌</h2> <hr>
        <br>
        <br>

         <div class="wrap" style="width:40rem; padding: 0 20rem 0 22rem;">
         <div class="user-image" style="float:left">
          <img src="images/1.png" alt="" />
        </div>
        <br>
        <br>
        <br>
        <br>
        <h3> <?php  echo $row['saying'];  ?></h3>
        <p class="paragraph" >
            <?php  echo '- by. '.$row['writer']; ?> 
        </p>
        <br>
        <br>

        <div class="user-image" style="float:right">
          <img src="images/2.png" alt="" />
        </div>
  
      </div>
        <br>
        <br>
        <p>
          
        <br><br>
      

      </div>
</body>
<script type="text/javascript">
    function F5() {		
		location.href="pro_saying.php";    
    }  
  </script>