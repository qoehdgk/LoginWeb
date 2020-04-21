<?php
  $id = $_POST['id'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $contents = $_POST['contents'];
  $write_date = date("Y-m-d H:i:s");

  $conn = mysql_connect("localhost","webadmin","qwer1234");

  if(!$conn){
    echo "connect fail ";
    exit;
  }

  mysql_select_db("webhacktest");
  $sql = "insert into board values('','$id','$password','$email','$title','$contents','$write_date')";

  $return = mysql_query($sql);
  if($return){
    echo "<script> alert(\"게시글 등록 완료\");";
    echo "location.href=\"board_list.php\"</script>";
  }

  else{
    echo "<script> alert(\"게시글 등록 실패\");";
    echo "location.href=\"board_write.php\"</script>";
  }
  mysql_close($conn);
?>
?>
