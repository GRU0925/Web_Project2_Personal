<!DOCTYPE html>
<html lang="ko">
  <head>
      <meta charset="UTF-8">
      <meta name="keywords" content="RentaCar">
      <meta name  ="author" content="GRU">
      
      <title>RentaCar</title>
      <!--  <meta name="viewport" content="width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0"> -->
      <link rel="stylesheet" href="/p2/swKim/Project2/css/main.css">
      <link rel="stylesheet" href="/p2/swKim/Project2/css/main_contents.css">

  </head>

  <body>
    <div class="main-container">
      <!-- =======  Header  ======== -->
      <header class="header">

        <?php include $_SERVER['DOCUMENT_ROOT']."/p2/swKim/Project2/php/header.php"?>
      </header>
      <hr>

      <!-- =======  Content  ======== -->
      <main class="main layout-boxsizing" name="main">   
        <ul id="container">
          <li style="clear:both; border-boxing:"></li>
          <?php
              // include "/p2/swKim/Project2/php/session.php";

              $con = mysqli_connect("localhost","gru","Ksw092525#","rentacar");
              $sql = "select * from rentacar_list order by num desc";
              $result = mysqli_query($con, $sql);

              $total_record = mysqli_num_rows($result);
              // $total_record = 12;
              
              // 한 페이지 12개만(나머지는 더보기 목록으로 페이지 이동) 
              for($i = 0; $i < $total_record; $i++) {
                
                mysqli_data_seek($result, $i);

                $row = mysqli_fetch_assoc($result);

                $title = $row["title"];             // 제목
                // $name = $row[""];
                $type = $row["type"];               // 차량타입
                $fuel = $row["fuel"];               // 연료타입
                $seat = $row["seat"];               // 인승
                $modelyeaer = $row["modelyear"];   // 연식
                $price = $row["price"];             // 가격
                
          ?>
              <li class="contents">
                <a href="#" onclick="">
                <!-- title -->
                <div>
                  <span class="title"><?=$title?></span>
                </div>
                <!-- fuel, seat, modelyear -->
                <div class = "info">
                  <span><?=$fuel?></span>
                  <span> | </span>
                  <span><?=$seat?>인승</span>
                  <span> | </span>
                  <span><?=$modelyeaer?>년형</span>
                </div>
                <!-- (name), price -->
                <div>
                  <span class="price"><?=$price?>원</span>
                </div>
              </li>

          <?php
              }
          ?>
      </main>
      <hr>  
      
      <!-- ==================================== -->
      <footer class="footer">
          <?php include $_SERVER['DOCUMENT_ROOT']."/p2/swKim/Project2/php/footer.html"?>
      </footer>

    </div>
  </body>

</html>
