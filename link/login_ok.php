<meta charset="utf-8" />
<?php
  $con = mysqli_connect("localhost", "root", "1234", "dog_info") or die ("mysql 접속 실패");

	//POST로 받아온 아이다와 비밀번호가 비었다면 알림창을 띄우고 전 페이지로 돌아감
  $id = $_POST['id'];
  $pw = $_POST['pw'];

  $sql = "SELECT * FROM usertbl WHERE user_no = '".$_POST['user_no']."'";

  $ret = mysqli_query($con, $sql);

  $row = mysqli_fetch_array($ret);
  $hashedPassword = $row['pw'];
  $row['id'];

  foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}

$passwordResult = password_verify($pw, $hashedPassword);
if ($passwordResult === true) {
    // 로그인 성공
    // 세션에 id 저장
    session_start();
    $_SESSION['id'] = $row['id'];
    print_r($_SESSION);
    echo $_SESSION['id'];

?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "index.html";
    </script>
<?php
} else {
    // 로그인 실패
?>
    <script>
        alert("로그인에 실패하였습니다");
        location.href = "login.html";
    </script>
<?php
}
?>
