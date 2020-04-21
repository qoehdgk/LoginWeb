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
      $sql = "select * from board order by no;";
      $return = mysql_query($sql);
      $rs_num = mysql_num_rows($return);
      mysql_close($conn);
    ?>

    <center>
      게시판
        <table style="width:500px;">
          <tr>
            <td colspan="4">글 목록</td>
          </tr>
          <tr>
            <td>번호</td>
            <td>제목</td>
            <td>작성자</td>
            <td>등록일</td>
          </tr>
          <tr>
            <?php
              if($rs_num >0){
                while($result = mysql_fetch_array($return)){
                  $no = $result['no'];
                  $title = $result['title'];
                  $id = $result['id'];
                  $writedate = $result['writedate'];

            ?>
          </tr>
          <tr>
            <td><?php echo $no; ?></td>
            <td><a style="color:black;" href="board_view.php?no=<?php echo $no; ?>">
              <?php echo $title; ?></a></td>
            <td><?php echo $id; ?></td>
            <td><?php echo $writedate; ?></td>
          </tr>
          <tr>
            <?php
                }
              }
                else {
             ?>
          <tr>
               <td colspan="4">등록된 글이 없습니다.</td>
          </tr>
            <?php
              }
              session_start();
              if($_SESSION['LoginID'])
              {
            ?>
          <tr>
            <td colspan ="4">
              <input type="submit" value="글쓰기" onclick="location.replace('board_write.php')">
            </td>
          </tr>
          <?php
          }

          ?>

        </table>
    </center>
  </body>
</html>
