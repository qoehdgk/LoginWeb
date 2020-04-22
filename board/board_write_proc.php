<?php
  $id = $_POST['id'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $contents = $_POST['contents'];
  $write_date = date("Y-m-d H:i:s");

  // $contents = str_replace("<","&lt;",$contents);   //<를 $lt로 대체 (인코딩)
  // $contents = str_replace(">","&gt;",$contents);
  // $contents = htmlspecialchars($contents);    //HTML 메타문자 인코딩
  // $contents = strip_tags($contents);              //태그형태 지우기


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
