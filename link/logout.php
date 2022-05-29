<?php
  include 'inc_head.php';
 ?>
 <!DOCTYPE html>
 <html lang="ko">
   <head>
     <meta charset="utf-8">
     <title>logout</title>
   </head>
   <body>
     <?php
     if( $jb_login) {
       session_destroy();

     ?>
     <script>
         alert("로그아웃 성공하였습니다.")
         location.href = "login.html";
     </script>
     <?php }

      else {
        ?>
        <script>
            alert("로그인 되어 있지 않습니다.")
            location.href = "login.html";
        </script>
     <?php }
     ?>

   </body>
 </html>
