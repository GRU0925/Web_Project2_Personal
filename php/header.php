<?php
    session_start();
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";
?>	

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/source/Project2/css/header.css">
    </head>
    </head>
    <body>
      <?php
        if(!$userid) {
      ?>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4"><a href="/source/Project2/php/main.php"></a>RentaCar</span>
              </a>
        
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="/source/Project2/php/main.php" class="nav-link">홈</a></li>
                <li class="nav-item"><a href="#" class="nav-link">예약</a></li>
                <li class="nav-item"><a href="#" class="nav-link">자유게시판</a></li>
                <li class="nav-item"><a href="javascript:login_popup()" class="nav-link">로그인</a></li>
                <li class="nav-item"><a href="/source/Project2/php/signup.php" class="nav-link">회원가입</a></li>
              </ul>
            </header>
          </div>
      <?php
        } else {
            $logged = $username."(".$userid.")";
      ?>
            <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4"><a href="/source/Project2/php/main.php"></a>RentaCar</span>
              </a>
              <ul style ="">
                <span><?=$logged?>님 환영합니다.</span>
              </ul>
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="/source/Project2/php/main.php" class="nav-link">홈</a></li>
                <li class="nav-item"><a href="#" class="nav-link">예약</a></li>
                <li class="nav-item"><a href="#" class="nav-link">자유게시판</a></li>
                
                <li class="nav-item"><a href="/source/Project2/php/logout.php" class="nav-link">로그아웃</a></li>
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

        window.open("/source/Project2/php/login.php", "Login",
            "left="+ windowX +", top=" + windowY + ", width=600, height=500, scrollbars=no");
      }
    </script>
</html>