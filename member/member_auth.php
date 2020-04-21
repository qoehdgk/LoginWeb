<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      session_start();
      if($_SESSION['LoginID'] == "admin123" && $_SERVER['REMOTE_ADDR'] != "100.100.100.10"){
        echo "<script> alert(\"Session Token Error!!\");";
        echo "location.href=\"../main.php\"</script>";
      }
     ?>
  </head>
  <body>
    <center>
        <form method="post" name="auth_form" action="member_auth_proc.php">
          비밀번호 확인 <br>
          PASSWORD: <input type="password" name="password"><br>
          <input type="submit" value="확인">
          <input type="reset" value="취소">

        </form>
    </center>
  </body>
</html>
