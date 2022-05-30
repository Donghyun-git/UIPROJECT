<meta charset="utf-8" />
<?php
  $con = mysqli_connect("localhost", "root", "1234", "dog_info") or die ("mysql 접속 실패");

	
  $id = $_POST['id'];
  $pw = $_POST['pw'];

  $sql = "SELECT * FROM dog WHERE id = '".$_POST['id']."'";

  $ret = mysqli_query($con, $sql);

  $row = mysqli_fetch_array($ret);
  $hashedPassword = $row['pw'];
  $row['id'];

  foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}

$passwordResult = password_verify($pw, $hashedPassword);
if ($passwordResult === true || $id == $row['id']) {
    // 로그인 성공
    // 세션에 id 저장
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['name']= $row['name'];
    print_r($_SESSION);
    echo $_SESSION['id'];
    echo $_SESSION['name'];

?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "../index.php";
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