<?php
//로그인 세션 시작 후 로그인 되어 있으면 true 값 저장
  $con = mysqli_connect("localhost", "root", "1234", "dog_info");

  session_start();
  if(isset ( $_SESSION['id'])) {
    $jb_login = TRUE;

    //이름으로 활동하게 하기 위한 코드


    $sql = "select name from userTBL where user_no= '".$_SESSION['id']."'";
    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($ret);
    $name = $row['name'];
    $_SESSION['name'] = $name;
  }
?>
