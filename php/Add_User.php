<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<link rel= "stylesheet" type="text/css" href="../css/adduser.css">
<body>
<?php
include('connect.php');
//session_start();
$id = $_SESSION['id'];
if($id == 1)
{
include('../html/header.php');
?>
<div class = "signup">

<form action="store.php" method="post" class = "formhold">
<header>ADD USER</header>
<div class="user">
  <input type="text" class = "input" name="fullname" placeholder="Fullname*" />
</div>
<div class="user">
  <input type="text" name="email" class = "input" placeholder="Email ID*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
</div>
<div class="user">
  <input type="text" name="username" class = "input" placeholder="Username*" />
</div>
<div class="user">
  <input type="password" name="password" class = "input" placeholder="Password*" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
</div>
<div class = "outer_role">
<div class = "role">
<label >Roles</label>
</div>
<div class = "role_name">
<?php
$sql="select * from ROLES where id != 1";
$re = mysql_query($sql,$conn);

$se = '<select name="id" class = "drpdwn">';
while($r = mysql_fetch_array($re)) {
  //print_r($r);
  $se .= '<option value="'.$r['id'].'">'.$r['users'].'</option>';
}
$se .= '</select>';
echo $se;

?>
</div></div>
<div class=" user user_btn ">
  <input type="submit" class = "button" name ="submit" value="Add User">
</div>
</form>
</div>
<?php  }
else{
  echo "Access  denied";
  }   ?>
</body>
</html>
