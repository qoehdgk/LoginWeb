<?php

  $password = $_POST['password'];

  $conn = mysql_connect("localhost","webadmin","qwer1234");

  if(!$conn){
    echo "connect fail ";
    exit;
  }

  session_start();
  mysql_select_db("webhacktest");
  $sql = "select * from member where id='$_SESSION[LoginID]'and password='$password';";
  $return = mysql_query($sql);
  $result = mysql_fetch_array($return);

  if($return){
    echo "<script> location.href=\"member_modi.php\"</script>";
  }

  else{
    echo "<script> alert(\"비밀번호가 잘못 입력 되었습니다.\");";
    echo "location.href=\"member_auth.php\"</script>";
  }
  mysql_close($conn);

 ?>
