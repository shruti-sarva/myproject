<html>
<head></head>
<link rel= "stylesheet" type="text/css" href="../css/view.css">
<body>
<?php
include('connect.php');
include('../html/header.php');
$uid = $_SESSION['uid'];
$sql41 = "SELECT * from T_essential where p_id = 1 order by Date desc";
   $result18 = mysql_query($sql41 ,$conn);
  while($row = mysql_fetch_array($result18))
 {
  $eid = $row['E_id'];
  $topic = $row['Topic'];
  $heading1 = $row['Heading'];
  $comment1 = substr($row['Description'],0,5);
  $pid = $row['p_id'];
  $tid = $row['Teachers_id'];

 echo '<form action="show1.php" method="post" class = "art">
       <input type="text" hidden name="eid" value="'.$eid.'"/>
       <label class = "user">TOPIC:</label>'.$topic.'<br>
       <label class = "user">HEADING:</label>'.$heading1.'<br>
       <label class = "user">Description:</label>'.$comment1.'<br>
       <input type="submit" name="submit" class = "touch" value = "Read more"/>
       </form>';
  }

?>
</body>
</html>
