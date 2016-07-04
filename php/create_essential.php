<!DOCTYPE html>
<html>
<head>
<link rel= "stylesheet" type="text/css" href="../css/createess.css">
  <title></title>
</head>
<body>
<?php
include('connect.php');

//session_start();
$id = $_SESSION['id'];
$id = isset($_SESSION['id']) ? $_SESSION['id'] : NULL;
if($id == 2)
{
  include('../html/header.php');
?>
<div  class = "outer_form">
<form action="post_essential.php" method="post" class="formholder">
<div class="user1">
  <input type="text" name="topic" class = "input" placeholder="Topic" />
</div>
<div class="user1">
  <input type="text" name="heading1" class ="input"  placeholder="Heading*" />
</div>
<div class = "user1">
  <textarea rows="10" cols="50" name="comment1" class = "area" placeholder = "Enter text here.." >
  </textarea>
</div>
<div class ="lab">
<label class = "labs">Date</label>
<input type="date" name="date" class = "date" min="1900-01-02">
</div>
<div class = "select">
<label class = "tag">Visibility</label>
<input type = "radio" name = "radio"  value = "0" checked >Private</input>
<input type = "radio" name = "radio"  value = "1">Public </input>
</div>
<?php
$sql7="select * from T_essential";
$re3 = mysql_query($sql7,$conn);
?>
<div class="submit">
  <input type="submit" name ="submit" class= "touch" value="create essential">
</div>
</form>
</div>
<?php  }else{
  echo"not a teacher";
  }?>

</body>
</html>
