<?php


  session_start();
  $_SESSION['LoginID']="";

  session_destroy();
    echo "<script> alert(\"Logout Complete\");";
    echo "location.href=\"index.html\"</script>";


?>
