
<?php

  // if($_COOKIE['user'] =="persistent")
  //   echo "not display pop up<br>";
  // else
  //   echo "display pop up<br>";
  session_start();

  if($_SESSION['LoginID'])
    echo $_SESSION['LoginID']."님";

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main</title>
  </head>
  <body>
    접속을 환영합니다!! <br>
    <?php
      if($_SESSION['LoginID']){
    ?>
      <a href="member/member_auth.php">회원정보 수정</a><br>
      <a href="member/member_out_auth.php">회원탈퇴</a><br>
      <a href="logout.php">로그아웃</a><br>
      <?php
      }
      else{
      ?>
        <a href="login/login.html">로그인</a><br>
        <a href="joinus.html">회원가입</a><br>
    <?php
      }
    ?>
    <a href="board/board_list.php">게시판</a><br>
    <a href="webhard.php">웹하드</a><br>
  </body>
</html>
