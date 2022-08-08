<?php
    $id   = $_POST["id"];               // 아이디
    $pass = $_POST["pass"];             // 비밀번호
    $name = $_POST["name"];             // 이름
    $birth  = $_POST["birth"];
    $license_num1 = $_POST["license_num1"];
    $license_num2 = $_POST["license_num2"];
    $license_num3 = $_POST["license_num3"];
    $license_num4 = $_POST["license_num4"];

    $regist_day = date("Y-m-d");
              
    $con = mysqli_connect("localhost", "gru", "Ksw092525#", "rentacar");  // DB 접속

	$sql = "insert into members (id, pass, name, birth, license_num1, license_num2, license_num3, license_num4, regist_day)";    // 데이터 삽입 명령
	$sql .= "values('$id', '$pass', '$name', '$birth', '$license_num1','$license_num2','$license_num3','$license_num4','$regist_day')";       

	mysqli_query($con, $sql);       // SQL 명령 실행
    mysqli_close($con);     

    // 로그인 폼으로 이동
    echo "<script>
              alert('회원가입이 완료되었습니다');
              login_popup();
	      </script>";

?>
<script type="text/javascript">
    function print_msg() {
        alert("회원가입이 완료되었습니다.")
    }

    function login_popup() {
        var windowX = (window.screen.width / 2) - (600 / 2);
        var windowY = (window.screen.height / 2) - (500 / 2);

        window.open("/p2/swKim/Project2/php/login.php", "Login",
            "left="+ windowX +", top=" + windowY + ", width=600, height=500, scrollbars=no");
      }
</script>