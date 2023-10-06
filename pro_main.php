
<?php
    session_start(); // 세션시작
    include 'check.php';
    ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Song+Myung&display=swap" rel="stylesheet">

    <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/pro_login.css">


     <style>

      body{        
        height: 100vh;
        overflow-y: hidden;
            background-image: url("images/photo2.jpg");
            background-size: cover;
            background-repeat : no-repeat;
            font-family: 'Song Myung', serif;
            
      }
            
      .container {
        width: 100%;
        height: 100%;
        text-align: center;

      position: absolute;
      top: 100%;
      left: 50%;
      transform: translate(-50%,-50%);
      

      }
      .title {
        font-size: 60px;
        color : #FFFFFF;
        font-style : italic;
        text-shadow: 4px 4px 2px gray;
      }

      .small {
        font-size: 15px;
        color : #FFFFFF;
        font-family: 'NanumSquareExtraBold';

      }

      .bg1{
      background-size:auto;
    }

    .center{
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%,-50%);
      
    }

    .login_main{
      text-decoration-line: none;
    }
    .login{
      text-decoration-line: none;
    }

  .title {
  display: inline-block;
  padding: 10px;
  animation: fadein 3s;
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
        <div class="center">
        <?php
      if ( $jb_login ) {
    ?>
      <a href="logout.php" class="login_main">LOGOUT</a>

    <?php
      } else {
    ?>
        <a href="pro_login.php" class="login_main">LOGIN</a>
       
        <?php
        }?>

<?php
      if ( $jb_login ) {
    ?>
      <a href="pro_home.php" class="login">HOME</a>

    <?php
      } else {
    ?>
        <a href="pro_join.php" class="login">JOIN</a>
       
        <?php
        }?>
        
        </div>
        <div class="container">
        <h1 class="title">Dear. diary<p class="small"><p></h1>
        
    </div>
    

</body>

<script>

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