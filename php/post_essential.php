<!DOCTYPE HTML>
 <html>
 <link rel= "stylesheet" type="text/css" href="../css/essential.css">
 <body>
<?php
include('connect.php');
include('../html/header.php');


if(isset($_POST['submit'])) {
$topic = $_POST['topic'];
$heading1 = $_POST['heading1'];
$comment1 = $_POST['comment1'];
$date = $_POST['date'];
$pid = $_POST['radio'];


//session_start();

}
$uid = $_SESSION['uid'];
//echo $uid;

if(empty($topic) && empty($heading1) && empty($comment1)&& empty($date))
{
  //echo "Please fill out all the informations";
}
  else
  {
    $sql8 = "INSERT INTO T_essential(Topic,Heading,Description,Teachers_id,date,p_id) VALUES('$topic','$heading1','$comment1',$uid,'$date',$pid)";
     $sql9 = mysql_query($sql8, $conn);
      if($sql9)
      {
        echo "essential  added";
      }
  }
  $sql40 = "SELECT * from T_essential where Teachers_id=$uid order by date DESC";
    $result15 = mysql_query($sql40 ,$conn);
  while($row = mysql_fetch_array($result15))
 {
  $eid = $row['E_id'];
  $topic = $row['Topic'];
  $heading1 = $row['Heading'];
  $comment1 = substr($row['Description'],0,5);
  $pid = $row['p_id'];
  $tid = $row['Teachers_id'];
  if($uid == $tid){
 echo '<form action="show1.php" method="post" class ="art">
       <input type="text" hidden name="eid" value="'.$eid.'"/>
       <label class ="user">TOPIC:&nbsp</label>'.$topic.'<br>
       <label class ="user">HEADING:&nbsp</label>'.$heading1.'<br>
       <label>pid:</label>'.$pid.'<br>
       <label class = "user">Description:&nbsp</label>'.$comment1.'<br>
       <input type="submit"  class = "touch" name="submit" value = "Read more"/>
       </form>';
  }
  else{
 if($pid==1){
 echo '
<form action="show1.php" method="post">
  <input type="text" hidden name="eid" value="'.$eid.'"/>
  <label>TOPIC:</label>'.$topic.'<br>
  <label>HEADING:</label>'.$heading1.'<br>
  <label>pid:</label>'.$pid.'<br>
  <label>Description:</label>'.$comment1.'<br>
  <input type="submit" name="submit" value = "Read more"/>
</form>';

}
}
}
?>
</body>
</html>
