<html>
<head></head>
<link rel= "stylesheet" type="text/css" href="../css/show1.css">
<body>
<?php
include('connect.php');
include('../html/header.php');
if (isset($_POST['submit'])) {
  $_SESSION['E_id'] = $_POST['eid'];
}
if($_SESSION['E_id']) {
  $eid=$_SESSION['E_id'];
  $sql30 = "SELECT * from T_essential where E_id = $eid";
  $result16 = mysql_query($sql30, $conn);
  $result9 = mysql_fetch_array($result16);
  // echo $result9['E_id'];
  echo'<div class = "outer">';
  echo '<div class = "user">';
 // echo $result9['Topic'];
  echo $result9['Heading'];
  echo '</div>';
 echo '<div class = "date">';
  echo $result9['date'];
  echo '<br></div>';
  echo '<div class = "name">';
  echo"BY $username";
  echo '</div>';
  echo '<br><div class = "user1">';
  echo $result9['Description'];
  echo '<br></div>';
  echo '</div>';
  echo '<p class ="line"></p>';

}

?>
