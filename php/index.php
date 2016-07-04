<!DOCTYPE html>
<html>
<head>
<link rel= "stylesheet" type="text/css" href="../css/login.css">
<script src = "../js/jquery.min.js"></script>
<script src = "../js/login.js"></script>
  <title></title>
</head>
<body>
<?php
include('connect.php');

?>

<div class="popup">
<!--<div align="">-->
<div class="popup_log">Login</div>
</div>

<div class = "hold">
<div class="triangleup"></div>
<div class = "form">
<form action="login.php" method="post" class = "formhold">
<div class="user">
  <input type="text" class="input" name="username" placeholder="Username*" />
</div>
<div class="user">
  <input type="password" name="password" class="input" placeholder="Password*" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
</div>
<div class="user user_btn">
  <input type="submit" class="login_btn" name ="submit" value="Login">
</div>
</form>
</div>
</div>
<!-- <div >
<img src ="../css/Happy-School-5-Tips-for-helping-students-in-NAPLAN-week.jpg">
</div>
 -->
<?php
// include('footer.php');
?>
</body>
</html>
