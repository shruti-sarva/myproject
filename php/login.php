<?php
session_start();
require('connect.php');
//print_r($_POST["username"]);
if (isset($_POST['username']) and isset($_POST['password']))
{

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql4 = "SELECT * FROM users WHERE Username = '$username' and Password = '$password'";

  $re = mysql_query($sql4, $conn);
  $rw = mysql_fetch_array($re);
  $id = $rw['Role_id'];
  $uid = $rw['user_id'];

  echo "$id";
  echo "$uid";

  if ($re)
  {
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $id;
    $_SESSION['uid'] = $uid;
    header("Location: Home.php");
  }
  else
  {
    echo "Username or password is invalid";
  }

}
?>
