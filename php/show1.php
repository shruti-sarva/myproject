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
  echo $result9['E_id'];
  echo $result9['Topic'];
  echo $result9['Heading'];
  echo $result9['Description'];

}

?>
