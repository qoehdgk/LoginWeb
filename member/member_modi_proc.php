<?php

  $password = $_POST['password'];
  $name = $_POST['name'];
  $nickname = $_POST['nickname'];
  $address = $_POST['address'];
  $telephone = $_POST['telephone'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];

  $conn = mysql_connect("localhost","webadmin","qwer1234");

  if(!$conn){
    echo "connect fail ";
    exit;
  }

  session_start();
  mysql_select_db("webhacktest");
  $sql = "update member set password='$password', name='$name', nickname='$nickname'
        , address='$address', telephone='$telephone', mobile='$mobile', email='$email'
          where id='$_SESSION[LoginID]';";

  $return = mysql_query($sql);
  if($return){
    echo "<script> alert(\"Info Chanege OK\");";
    echo "location.href=\"../login/login.html\"</script>";
  }

  else{
    echo "<script> alert(\"Info Change Fail\");";
    echo "location.href=\"member_modi.php\"</script>";
  }
  mysql_close($conn);
?>
