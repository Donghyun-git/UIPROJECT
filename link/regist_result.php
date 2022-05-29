<?php
//mysql접속//
  $con = mysqli_connect("localhost", "root", "1234", "dog_info") or die ("mysql 접속 실패");

//회원가입 textbox 데이터 전송//
  $userno = $_POST["userno"];
  $id = $_POST["id"];
  $pw = password_hash($_POST["pw"], PASSWORD_DEFAULT);
  $name = $_POST["name"];


//테이블에 데이터 저장//
  $sql = "INSERT INTO dog VALUES ('".$userno."', '".$id."', '".$pw."', '".$name."')";

//boolean 값 반환//
  $ret = mysqli_query($con, $sql);


  if ($ret)
  {
    ?>
      <script>
        alert("회원가입에 성공하였습니다.")
        location.href = "login.php";
    </script>
    <?php
  }
  else
  {
    echo "에러! <br>";
    echo "원인: ".mysqli_error($con);
  }

//mysql 종료//
  mysqli_close($con);

 ?>
