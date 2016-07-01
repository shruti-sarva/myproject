<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
  <body>
  <?php
    $id = $_SESSION['id'];
    $uid = $_SESSION['uid'];
    $nid = $_SESSION['News_id'];
//include('connect.php');
//session_start();
//include('../html/header.php');

//echo "id is $nid";
if($id == 2 || $id == 3)
{
  ?>
<form name="comment2" action="show.php" method="post" >
  <textarea class="content"  name= "content" placeholder = "Comment.."></textarea>

  <?php
// $sql11 = "SELECT * from comments where News_id = $nid order by Comment_id DESC";
// $re4 = mysql_query($sql11,$conn);
// while ($abc = mysql_fetch_array($re4))
// {
// print_r($abc);
// }
?>
<div class="submit">
  <input type="submit" class = "button" name ="submitcomment" value="post">
</div>
</form>
<?php } ?>
    <?php

    //echo "$id";
    //echo "$uid";
      if(isset($_POST['submitcomment'])) {
        $comment2 = $_POST['content'];
     if(empty ($comment2))
    {
      //echo "Add comment";
    }
      else
      {
        $sql13 = "INSERT INTO comments(Comment,News_id,user_id) values('$comment2','$nid','$uid')";
        $sql14 = mysql_query($sql13, $conn);
      }
    }

      $sql22 = " SELECT comment_id,Comment,News_id,username from comments,users where comments.user_id = users.user_id  and News_id = $nid order by Comment_id DESC";
      $re4 = mysql_query($sql22,$conn);
        if($re4)
       // echo "success";
         while($row = mysql_fetch_array($re4)) {
                  if(!empty($row['Comment']))
        {
          echo '<div class ="inner">';
          echo '<p class ="use">'.$row['username'] .':&nbsp</p>';
          echo '<p class ="set">'.$row['Comment'].'</p>';
          echo'</div>';
        }

      }
 ?>
</body>
</html>




