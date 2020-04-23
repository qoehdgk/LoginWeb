<?php
  $no = $_POST['no'];
  $id = $_POST['id'];
  $password = $_POST['password'];


  $conn = mysql_connect("localhost","webadmin","qwer1234");

  if(!$conn){
    echo "connect fail ";
    exit;
  }

  mysql_select_db("webhacktest");
  $sql = "select * from board where id='$id' and password='$password';";

  $return = mysql_query($sql);
  $result = mysql_fetch_array($return);
  if($result){
    echo "<script> location.href=\"board_delete_proc.php?no=".$no."\" </script>";
  }

  else{
    echo "<script> alert(\"게시글 비밀번호가 일치 되지 않습니다.\");";
    echo "location.href=\"board_view.php?no=".$no."\"</script>";
  }
  mysql_close($conn);
?>
