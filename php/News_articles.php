<html>
<head></head>
<link rel= "stylesheet" type="text/css" href="../css/viewnews.css">
<body>
<?php
include('connect.php');
include('../html/header.php');
$uid = $_SESSION['uid'];
 $sql30 = "SELECT * from News where p_id = 1 order by Date desc";
   $result8 = mysql_query($sql30 ,$conn);
  while($row = mysql_fetch_array($result8))
 {
  $nid = $row['News_id'];
  $heading = $row['Heading'];
  $descr = substr($row['Description'],0,5);
  $pid = $row['p_id'];
  $tid = $row['Teachers_id'];
 echo '<form action="show.php" method="post" class = "art">
<input type="text" hidden name="nid" value="'.$nid.'"/>
  <label class = "user">HEADING:</label>'.$heading.'<br>
  <label class = "user">pid:</label>'.$pid.'<br>
  <label class="user">Description:</label>'.$descr.'<br>
  <input type="submit" name="submit" class = "touch" value = "Read more"/>
</form>';
}
  ?>
  </body>
  </html>
