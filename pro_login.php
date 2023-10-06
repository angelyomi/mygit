<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>나의 이야기 로그인</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Song+Myung&display=swap" rel="stylesheet">
    <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/pro_login.css">
    <style>
    body {
        height: 700px;
        weight: auto;
        background: url("images/ponyo.jpg") no-repeat center;
        /* background-size: contain; */

    }

    input:placeholder-shown + label{
        font-family: 'NanumSquareBold';
    }

    .center{
      position: absolute;
      top: 75%;
      left: 50%;
      transform: translate(-50%,-50%);
      
    }
    body{

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

    <form id="Login" action="pro_login_ok.php" method="post">
    <div class = "container_login">

    <div class = "title"><h2>LOGIN</h2></div>
        <div class="Login">
        <form action="" method="POST">

        <div class="input-box">
            <input id="id" type="text" name="id" placeholder="">
            <label for="id">아이디</label>
        </div>

        <div class="input-box">
            <input id="pw" type="password" name="pw" placeholder="비밀번호">
            <label for="pw">비밀번호</label>
        </div>

        <div class="center">
        <button type="submit" class="login_main" style="border:none; font-family: 'Song Myung', serif; font-size: 13pt;"> LOGIN </button>
        </div>
    
        </form>
        </div>
    </div>
    </form>
</body>
</html>