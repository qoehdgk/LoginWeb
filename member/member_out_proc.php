<?php

  $conn = mysql_connect("localhost","webadmin","qwer1234");

  if(!$conn){
    echo "connect fail ";
    exit;
  }

  session_start();
  mysql_select_db("webhacktest");
  $sql = "delete from member where id='$_SESSION[LoginID]'";

  $return = mysql_query($sql);
  if($return){
    $_SESSION['LoginID']="";
    session_destroy();
    echo "<script> alert(\"회원 탈퇴 성공\");";
    echo "location.href=\"../login/login.html\"</script>";
  }

  else{
    echo "<script> alert(\"회원 탈퇴 실패\");";
    echo "location.href=\"../main.php\"</script>";
  }
  mysql_close($conn);

?>
