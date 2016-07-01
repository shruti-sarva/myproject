
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'shruti';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (! $conn ) {
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('online_information');
session_start();
?>
