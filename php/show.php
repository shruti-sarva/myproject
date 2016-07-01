<html>
<head></head>
<link rel= "stylesheet" type="text/css" href="../css/show.css">
<body>
<?php
include('connect.php');
include('../html/header.php');
if (isset($_POST['submit'])) {
  $_SESSION['News_id'] = $_POST['nid'];
}
if($_SESSION['News_id']) {
  $nid=$_SESSION['News_id'];
  $sql20 = "SELECT * from News where News_id = $nid";
  $result3 = mysql_query($sql20, $conn);
  $result = mysql_fetch_array($result3);
  echo $result['News_id'] ;
  echo'<div class = "outer">';
  echo '<div class = "user">';
  echo  $result['Heading'];
  echo '</div>';
  echo '<div class = "date">';
  echo $result['Date'];
  echo '<br></div>';
  echo '<div class = "name">';
  echo"BY $username";
  echo '</div>';
  echo '<br><div class = "user1">';
  echo $result['Description'];
  echo '<br></div>';
  echo '</div>';
  echo '<p class ="line"></p>';
 //echo"<div><br></div>";
}

?>
<?php
include('comment.php');
?>
</body>
</html>
