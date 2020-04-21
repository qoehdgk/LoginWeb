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

  if(!preg_match('/^(?=.*?[a-z])(?=.*?[0-9]).{4,12}$/',$id)){
    echo "<script> alert(\"아이디 입력값 오류!!\");";
    echo "location.href=\"joinus.html\"; </script>";
  }

  if(!preg_match('/^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^$*-]).{6,20}$/',$password)){
    echo "<script> alert(\"비밀번호 입력값 오류!!\");";
    echo "location.href=\"joinus.html\"; </script>";
  }

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
    echo "location.href=\"login/login.html\"</script>";
  }

  else{
    echo "<script> alert(\"Join Fail\");";
    echo "location.href=\"joinus.html\"</script>";
  }
  mysql_close($conn);
?>
