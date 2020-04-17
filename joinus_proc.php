<?php

  $id = $_POST['id'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $nickname = $_POST['nickname'];
  $address = $_POST['address'];
  $telephone = $_POST['telephone'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $joinus_date = date("Y-m-d H:i:s");

  $conn = mysql_connect("localhost","webadmin","qwer1234");

  if(!$conn){
    echo "connect fail ";
    exit;
  }
  mysql_select_db("webhacktest");
  $sql = "insert into member values('$id','$password','$name','$nickname','$address','$telephone','$mobile','$email','$joinus_date')";

  $return = mysql_query($sql);
  if($return){
    echo "<script> alert(\"Join Complete\");";
    echo "location.href=\"login.html\"</script>";
  }
  else{
    echo "<script> alert(\"Join Fail\");";
    echo "location.href=\"joinus.html\"</script>";
  }
  mysql_close($conn);
?>
