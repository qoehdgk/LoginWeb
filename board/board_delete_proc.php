<?php

  $no = $_GET['no'];

  $conn = mysql_connect("localhost","webadmin","qwer1234");

  if(!$conn){
    echo "connect fail ";
    exit;
  }

  mysql_select_db("webhacktest");
  $sql = "delete from board where no='$no';";

  $return = mysql_query($sql);
  $result = mysql_fetch_array($return);
  if(!$result){
    echo "<script> alert(\"게시글 삭제 완료\");";
    echo "location.href=\"board_list.php\"</script>";
  }

  else{
    echo "<script> alert(\"게시글 삭제 실패\");";
    echo "location.href=\"board_view.php?no=".$no."\"</script>";
  }
  mysql_close($conn);
?>
