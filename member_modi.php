<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      $conn = mysql_connect("localhost","webadmin","qwer1234");
      if(!$conn){
        echo "connect fail ";
        exit;
      }
      mysql_select_db("webhacktest");

      session_start();
      $sql = "select * from member where id ='$_SESSION[LoginID]';";
      $return = mysql_query($sql);
      $result = mysql_fetch_array($return);
    ?>
  </head>
  <body>
    <center>
      <br><br> 회 원 정 보 변 경
        <form name="info_ch_form" method="post" action="member_modi_proc.php">
          ID :  <?php echo $result['id']; ?><br>
          PW :  <input type="password" name="password"><br>
          PW(re) :  <input type="password" name="password_re"><br>
          name :  <input type="text" name="name" value="<?php echo $result['name']; ?>"><br>
          nickname :  <input type="text" name="nickname" value="<?php echo $result['nickname']; ?>"><br>
          address :  <input type="text" name="address" value="<?php echo $result['address']; ?>"><br>
          telephone :  <input type="text" name="telephone" value="<?php echo $result['telephone']; ?>"><br>
          mobile :  <input type="text" name="mobile" value="<?php echo $result['mobile']; ?>"><br>
          <input type="submit" value="change">
          <input type="button" value="cancel">
        </form>
    </center>
  </body>
</html>
