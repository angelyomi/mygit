
<?php
    session_start(); // 세션시작
    include 'check.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>나의 이야기 회원가입</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Song+Myung&display=swap" rel="stylesheet">

    <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/pro_login.css">
    <style>

        body {
            height: 700px;
            weight: auto;
            background: url("images/main.jpg") no-repeat center;
            background-size: cover;
        }

        input:placeholder-shown + label{
            font-family: 'NanumSquareBold';
        }
        input:focus + label, label{font-family: 'NanumSquareBold';}
        .center{
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%,-50%);
            
            }

            body{  display: inline-block;

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
    <form method="POST" action="pro_join_ok2.php" >
    <div class = "container_join">

    <div class = "title"><h2>JOIN</h2></div>
        <div class="Login">

        <div class="input-box">
            <input id="id" type="text" name="id" placeholder="">
            <label for="id">아이디</label>   </div>

        <div class="input-box">
            <input id="pw" type="password" name="pw" placeholder="비밀번호">
            <label for="pw">비밀번호</label>
        </div>

        <div class="input-box">
            <input id="name" type="text" name="name" placeholder="">
            <label for="name">이름</label>
        </div>

        <div class="input-box">
            <input id="hp" type="text" name="hp" placeholder="">
            <label for="hp">연락처</label>
            
        </div>

        <div class="input-box">
            <input id="email" type="text" name="email" placeholder="">
            <label for="email">이메일</label>
        </div>
        <div class="center">
        <button type="submit" class="login_main" style="border:none; font-family: 'Song Myung', serif; font-size: 13pt;"> JOIN </button>
        </div>
    
        </div>
    </div>
    </form>
</body>


</html>