<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/p2/swKim/Project2/css/signup.css">
    <!-- <link rel="stylesheet" href="/p2/swKim/Project2/css/header.css"> -->
    <title>RentaCar Signup</title>
</head>
<body>
    <div class="main-container">
      <!-- =======  Header  ======== -->
      <header class="header">

        <?php include $_SERVER['DOCUMENT_ROOT']."/p2/swKim/Project2/php/header.php"?>
      </header>
      <hr>
      <!-- =========================== -->
      <!-- =======  Content  ======== -->   
      <main class="main">   
        <form class="bg-lightgray pd-sm" name="members" action="members_insert.php" method="post">
            <h2>회원 가입</h2>
            <ul>   
                <li>
                    <span class="col1">이름</span>
                    <span class="col2"><input style="width: 100%; " type="text" name="name" size="20" required></span>
                </li>
                <li>
                    <span class="col1">아이디</span>
                    <span class="col2"><input style="width: 100%;" type="text" name="id" minlength="6" maxlength="20"
                        pattern="[a-zA-Z0-9]" required></span>
                    <span class="col3"><button type="button" onclick="check_id()">중복체크</button></span>
                </li>
                <li>
                    <span class="col1">비밀번호</span>
                    <span class="col2"><input style="width: 100%;" type="password" value="" minlength="8" maxlength="20" placeholder="8~16자리 영문 대 소문자, 숫자, 특수문자를 사용해주세요" 
                        pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,16}$" name="pass" required></span>
                </li>
                <li>
                    <span class="col1">비밀번호 확인</span>
                    <span class="col2"><input style="width: 100%;" type="password" name="pass_confirm" value="" onkeyup="check_pass()" required></span>
                    <span id="pw_check_msg"></span> 
                </li>
                <li>
                    <span class="col1">생년월일</span>
                    <span class="col2"><input style="width: 100%;" type="date" name="birth"></span>
                </li>
                <li>
                    <span class="col1">운전면허증 번호</span>
                    <span class="col2">
                        <input size="2" type="text" name="license_num1" maxlength="2" pattern="[0-9]{2}" required> -
                        <input size="2" type="text" name="license_num2" maxlength="2" pattern="[0-9]{2}" required> -
                        <input size="6" type="text" name="license_num3" maxlength="6" pattern="[0-9]{6}" required> -
                        <input size="2" type="text" name="license_num4" maxlength="2" pattern="[0-9]{2}" required>
                    </span>
                </li>
            </ul>
            <ul class="buttons">
                <span><button type="button" onclick="check_input()">저장하기</button></span>
                <span><button type="button" onclick="reset_form()">닫기</button></span>
            </ul>
        </form>
      </main>
      <hr>  
      <!-- ==================================== -->
      <footer class="footer">
          <?php include $_SERVER['DOCUMENT_ROOT']."/p2/swKim/Project2/php/footer.html"?>
      </footer>

    </div>

    <script>
                
        function check_input() {
            if(!document.members.id.value) {
                alert("아이디를 입력해주세요");
                document.members.id.focus();
                return;
            }
            if(!document.members.pass.value) {
                alert("비밀번호를 입력해주세요");
                document.members.pass.focus();
                return;
            }
            if(!document.members.pass_confirm.value) {
                alert("비밀번호 확인을 입력해주세요");
                document.members.pass_confirm.focus();
                return;
            }
            if(!document.members.name.value) {
                alert("이름을 입력해주세요");
                document.members.name.focus();
                return;
            }
            if(!(document.members.license_num1.value || document.members.license_num2.value || 
                document.members.license_num3.value || document.members.license_num4.value )){
                alert("면허증 번호를 입력해주세요");
                document.members.license_num1.focus();
                document.members.license_num2.focus();
                document.members.license_num3.focus();
                document.members.license_num4.focus();

                return;
            }
            document.members.submit();
        }

        function reset_form() {
            document.members.id.value = "";
            document.members.pass.value = "";
            document.members.pass_confirm.value = "";
            document.members.name.value = "";
            document.members.license_num1.value = "";
            document.members.license_num2.value = "";
            document.members.license_num3.value = "";
            document.members.license_num4.value = "";
            document.members.id.focus();
            
            return;
        }

        function check_id() {
            window.open("/p2/swKim/Project2/php/idcheck.php?id="+document.members.id.value, "IDcheck",
            "left=700,top=300,width=380, height=160, scrollbars=no, resizable=yes");
        }

        function check_pass() {
            var p = document.members.pass.value;
            var p_cf = document.members.pass_confirm.value;
            var p_msg = document.getElementById("pw_check_msg");

            if (p!=p_cf) { 
                p_msg.innerHTML ="비밀번호가 다릅니다. 다시 확인해 주세요."; 
            } 
            else { 
                p_msg.innerHTML = ""; 
            } 
            if (p_cf=="") { 
                p_msg.innerHTML = ""; 
            } 
        }

        function check() {
            var t1 = document.members.name.value;
            var t2 = document.members.id.value;
            var t3 = document.members.pass.value;
            var t4 = document.members.pass_confirm.value;
            var t5 = document.members.birth.value;
            var t6 = document.members.license_num1.value;
            var t7 = document.members.license_num2.value;
            var t8 = document.members.license_num3.value;
            var t9 = document.members.license_num4.value;
            
            console.log("name : " + t1
                    + "\nid : " + t2
                    + "\npass : " + t3
                    + "\npassCon : " + t4
                    + "\nbirth : " + t5
                    + "\nlNum1 : " + t6
                    + "\nlNum2 : " + t7
                    + "\nlNum3 : " + t8   
                    + "\nlNum4 : " + t9
                    );

        }
            </script>
  </body>

</html>