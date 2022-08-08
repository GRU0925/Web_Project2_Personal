<!-- <?php  include("session.php");?> -->

<!DOCTYPE html>
<html lang="ko">
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="/p2/swKim/Project2/css/main_contents.css">
  </head>

  <body>
    <div class="main_wrap">

        <ul class="contents-ul" >
          <div class="contents-box">  
            <?php
                // include "/p2/swKim/Project2/php/session.php";

                $con = mysqli_connect("localhost","gru","Ksw092525#","rentacar");
                $sql = "select * from rentacar_list order by num desc limit 12";
                $result = mysqli_query($con, $sql);

                $total_record = mysqli_num_rows($result);
                // $total_record = 12;
                
                $windowX = '<script> var windowX = (window.screen.width / 2) - (1000 / 2); document.write(windowX);</script>';
                $windowY = '<script> var windowY = (window.screen.height / 2) - (700 / 2); document.write(windowY);</script>';

                $count = 0;

                // 한 페이지 12개만(나머지는 더보기 목록으로 페이지 이동) 
                for($i = 0; $i < $total_record /3; $i++) {
                                      

                  

                  // for($j = 0; $j < $total_record/3; $j++ ) {
            ?>
                  <div class="d-column">
            <?php
                    for($k = 0; $k < 3; $k++) {
                      
                      mysqli_data_seek($result, $count);

                      $row = mysqli_fetch_assoc($result);
      
                      $num = $row["num"];
                      $title = $row["title"];             // 제목
                      $name = $row["name"];
                      $type = $row["type"];               // 차량타입
                      $fuel = $row["fuel"];               // 연료타입
                      $seat = $row["seat"];               // 인승
                      $modelyear = $row["modelyear"];     // 연식
                      $price = $row["price"];             // 가격
                      
                      $sendInfo = "title=".$title."&type=".$type."&fuel=".$fuel."&seat=".$seat."&mYear=".$modelyear."&price=".$price;
                      
                      $count++;

            ?>
                      <div class="contents">                
                        <li> 
                          <?php
                            if(!$userid) {
                              // <a href="window.open"
                          ?>
                          <?php
                            } else {
                          ?>
                              <a href="javascript:window.open('/p2/swKim/Project2/php/reservation.php?<?=$sendInfo?>', '예약', 
                                'left=<?=$windowX?>,top=<?=$windowY?>,width=1000, height=700, scrollbars=no, resizable=yes');">
                          <?php
                            }
                          ?>
                            <!-- title -->
                            <div style="justify-content: center;">
                              <img  src="/p2/swKim/Project2/img/<?=$name?>.jpg"  style="max-width:100%; height:auto;">
                            </div>
                            <div>
                              <span class="title"><?=$title?></span>
                            </div>
                            <!-- fuel, seat, modelyear -->
                            <div class = "info">
                              <span><?=$fuel?></span>
                              <span> | </span>
                              <span><?=$seat?>인승</span>
                              <span> | </span>
                              <span><?=$modelyear?>년형</span>
                            </div>
                            <!-- (name), price -->
                            <div>
                              <span class="price"><?=$price?>원</span>
                            </div>
                          </li>
                        </div>
            <?php     
                      }
            ?>
                    </div>
            <?php
                    // }
                  }
            ?>
          </div>   
          <div>
          <span class="bt-right"><a href="/p2/swKim/Project2/php/main_reservation.php">더 보기</a></span>
        </div>   
        </ul>

    </div>

  </body>
</html>
