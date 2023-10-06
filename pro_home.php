<?php
    $con = mysqli_connect("localhost", "root", "qwer", "project_db");
    mysqli_query($con,'SET NAMES utf8');	
	
//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
	session_start();
  }
  $id = $_SESSION['id'];                                    
  $sql = "select * from diary_tb where id ='$id' order by date_reg desc"; 
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
            
}

@keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
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
    
    <div style="background-color:white; margin:15px; padding:20px 20px; ">
      <div> <button class="login_main" onclick="Write()" style="float:right; width:70px; line-height:30px; ">글쓰기</button></p> </div>
        <br><br><br>
        
        <?php
             while($row = mysqli_fetch_array($result)){

                $regdate = $row['date_reg'];
                $date = date_create($regdate);
                $_date = date_format($date, "Y.m.d");
                ?>
     
      <div class = "home_diet">
        <h2 class = "diary_date">        
            <?php
            echo ' 💌 '.$_date;
             ?>
            <a href="pro_modify.php?idx=<?php echo $row['idx']?>" class="login_main" style="float:right;">수정하기</a>
            <a href="pro_delete.php?idx=<?php echo $row['idx']?>" class="login_main" style="float:right;">삭제하기</a>
            
             

        </h2>
        <hr>

        <h4 class="diary_title">
          <?php
            echo '✅ '.$row['title'].' ✅';
            ?></h4>
        <div class="paragraph" style="width: 60rem;">
            <?php
            echo $row['content'];
            ?> 
        </div>
        <br>
        <?php
        if($row['photo'] != null){
            echo '<img src="'.$row['photo'].'" style="width: 100px; height: 100px;">';}
            ?> 
        </div>
        <br>

            <?php
             }

            ?>

        </div>
</body>

  
<script type="text/javascript">
    function Write() {		
		location.href="pro_write.php";    
    }  
    function Modify() {		
    <?php
      $_SESSION['idx']=$row['idx'];
      ?>
    location.href="pro_subhome.php"; 
    } 

    const $txt = document.querySelector(".small");
    const content = "일상을 기록하세요. 또 하나의 추억이 됩니다.";
    let contentIndex = 0;

      addEventListener('load', () => {
        setTimeout(() => {
          for (let i=0; i<content.length; i++) {
            setTimeout(() => {
              $txt.innerHTML += content[i];
            }, 150 * (i))
          }
        }, 1400)
      })

  </script>
</html>