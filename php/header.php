<?php include("session.php");?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/p2/swKim/Project2/css/header.css">
        
    </head>
    </head>
    <body>
      <?php
        if(!$userid) {
      ?>
        <div class="h-container">
            <header class="d-flex mb-4">
              <a href="/p2/swKim/Project2/php/main.php" class="d-flex text-dark text-decoration-none f_left">
                <img class="middle" src="/p2/swKim/Project2/img/RentaCar_logo.png" width="100%" height="60%">
                <span class="fs-4 "><h4>RentaCar</h4></span>
              </a>
        
              <ul class="nav nav-pills f_right">
                <li class="nav-item"><a href="/p2/swKim/Project2/php/main.php" class="nav-link">홈</a></li>
                <li class="nav-item"><a href="/p2/swKim/Project2/php/main_reservation.php" class="nav-link">예약</a></li>
                <li class="nav-item"><a href="#" class="nav-link">자유게시판</a></li>
                <li class="nav-item"><a href="javascript:login_popup()" class="nav-link">로그인</a></li>
                <li class="nav-item"><a href="/p2/swKim/Project2/php/signup.php" class="nav-link">회원가입</a></li>
              </ul>
            </header>
          </div>
      <?php
        } else {
            $logged = $username."(".$userid.")";
      ?>
          <div class="container">
            <header class="d-flex mb-4">
              <a href="/p2/swKim/Project2/php/main.php" class="d-flex text-dark text-decoration-none f_left">
                <img class="middle" src="/p2/swKim/Project2/img/RentaCar_logo.png" width="100%" height="60%">
                <span class="fs-4"><h4>RentaCar</h4></span>
              </a>
              <ul style ="float:right;">
                <span><?=$logged?> 님 환영합니다.</span>
              </ul>
              <ul class="nav nav-pills f_right">
                <li class="nav-item"><a href="/p2/swKim/Project2/php/main.php" class="nav-link">홈</a></li>
                <li class="nav-item"><a href="/p2/swKim/Project2/php/main_reservation.php" class="nav-link">예약</a></li>
                <li class="nav-item"><a href="#" class="nav-link">자유게시판</a></li>
                
                <li class="nav-item"><a href="/p2/swKim/Project2/php/logout.php" class="nav-link">로그아웃</a></li>
                <li class="nav-item"><a href="#" class="nav-link">회원정보수정</a></li>
              </ul>
            </header>
          </div>
      <?php
        }
      ?>
    </body>
    <script>
      function login_popup() {
        var windowX = (window.screen.width / 2) - (600 / 2);
        var windowY = (window.screen.height / 2) - (500 / 2);

        window.open("/p2/swKim/Project2/php/login.php", "Login",
            "left="+ windowX +", top=" + windowY + ", width=600, height=500, scrollbars=no");
      }
    </script>
</html>