<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
        table, tr, td{
          border: 1px solid black;
          border-collapse: collapse;
          text-align: center;
        }
    </style>
  </head>
  <body>
    <?php
      $conn = mysql_connect("localhost","webadmin","qwer1234");

      if(!$conn){
        echo "connect fail ";
        exit;
      }

      session_start();
      mysql_select_db("webhacktest");
      $sql = "select * from member where id='$_SESSION[LoginID]';";
      $return = mysql_query($sql);
      $result = mysql_fetch_array($return);
      mysql_close($conn);
    ?>
    <center>
      <form method="get" name="board_write_form" action="board_write_proc.php">
          <table style="width: 700px;">
            <tr>
              <td colspan="2">게 시 글 작 성</td>
            </tr>
            <tr>
              <td>작성자</td>
              <td><input type="texst" name="id" value="<?php echo $result['id']; ?>"</td>
            </tr>
            <tr>
              <td>글 비밀번호</td>
              <td><input type="password" name="password"></td>
            </tr>
            <tr>
              <td>이메일</td>
              <td><input type="text" name="email" value="<?php echo $result['email']; ?>"></td>
            </tr>
            <tr>
              <td>글 제목</td>
              <td><input type="text" name="title"></td>
            </tr>
            <tr>
              <td>글 내용</td>
              <td><textarea name="contents" rows="8" cols="40"></textarea></td>
            </tr>
            <tr>
              <td colspan="2"> <input type="submit" value="등록">
              <input type="button" value="취소" onclick='location.replace("board_list.php")'></td>
            </tr>

          </table>
      </form>

    </center>

  </body>
</html>
