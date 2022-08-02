<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <style>
        .close {
            margin:20px 0 0 120px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $id = $_GET["id"];

            if(!$id) {
                echo("아이디를 입력해주세요");
            }
            else {
                $con = mysqli_connect("localhost", "gru", "Ksw092525#", "rentacar");
                $sql = "select * from members where id='$id'";
                $result = mysqli_query($con, $sql);

                $num_record = mysqli_num_rows($result);

                if($num_record) {
                    echo $id."아이디는 중복됩니다.<br>";
                    echo "다른 아이디를 입력해주세요<br>";
                }
                else {
                    echo $id."이 아이디는 사용 가능합니다<br>";
                }
                mysqli_close($con);
            }
        ?>
    </div>
    <div>
        <button onclilck="javascript:self.close()">닫기</button>
    </div>
    
</body>
</html>