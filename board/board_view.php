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
    <script type="text/javascript">
      function check_onclick(){
        formValue = document.delete_form;

        if(formValue.password.value==""){
          alert("비밀번호가 입력되지 않았습니다.");
          formValue.password.focus();
          return false;

        }
        document.delete_form.submit();
      }
    </script>
  </head>
  <body>
    <?php
      $no = $_GET['no'];

      // $no = htmlspecialchars($no);
      // $no = strip_tags($no);
      $conn = mysql_connect("localhost","webadmin","qwer1234");

      if(!$conn){
        echo "connect fail ";
        exit;
      }

      session_start();
      mysql_select_db("webhacktest");
      $sql = "select * from board where no='$no';";
      $return = mysql_query($sql);
      $result = mysql_fetch_array($return);
      mysql_close($conn);
    ?>
    <center>
        <table style="width:700px;">
          <tr>
            <td colspan="2"> 게 시 글 내 용</td>
          </tr>
          <tr>
            <td>글 번호</td>
            <td><?php echo $no; ?></td>
          </tr>
          <tr>
            <td>작성자</td>
            <td><?php echo $result['id']; ?></td>
          </tr>
          <tr>
            <td>이메일</td>
            <td><?php echo $result['email']; ?></td>
          </tr>
          <tr>
            <td>글 제목</td>
            <td><?php echo $result['title']; ?></td>
          </tr>
          <tr>
            <td>글 내용</td>
            <td><?php echo $result['contents']; ?></td>
          </tr>
            <form name="delete_form" action="board_delete.php" method="post">
              <input type="hidden" name="no" value="<?php echo $no; ?>">
              <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <tr>
            <td colspan ="2">
              password: <input type="password" name="password">
              <input type="button" value="삭제" onclick="check_onclick()">
              <input type="button" value="목록" onclick='location.replace("board_list.php")'>
            </td>
          </tr>
          </form>
        </table>
    </center>
  </body>
</html>
