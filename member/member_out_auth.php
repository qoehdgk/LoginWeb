<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      session_start();
     ?>
  </head>
  <body>
    <center>
        <form method="post" name="auth_form" action="member_out_auth_proc.php">
          비밀번호 확인 <br>
          PASSWORD: <input type="password" name="password"><br>
          <input type="submit" value="확인">
          <input type="reset" value="취소">

        </form>
    </center>
  </body>
</html>
