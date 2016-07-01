<!DOCTYPE html>
<html>
<head>
<link rel= "stylesheet" type="text/css" href="../css/createarticle.css">
  <title></title>
</head>
<body>
<?php
include('connect.php');

//session_start();

$id = isset($_SESSION['id']) ? $_SESSION['id'] : NULL;

if ($id == 2) {
  include('../html/header.php');
?>
<div  class = "outer_form">
<form action="post_news.php" method="post" class = "formholder">
<div class="area">
  <input type="text" name="heading" class = "user" placeholder="Heading*" />
</div>
<div class = "area">
  <textarea rows="10" cols="50" class = "user" name="comment" palceholder = "Enter text here..." >
  </textarea>
</div>
<div class = "lab">
<label class ="tags">Date</label>
<input type="date" name="date" min="1900-01-02" class ="date "></div>
<div class = "select ">
<label class = "tag">Visibility</label>
<input type = "radio" name = "radio" value = "0" checked >Private</input>
<input type = "radio" name = "radio" value = "1">Public </input>
</div>
<?php
// $sql5="select * from News";
// $re1 = mysql_query($sql5,$conn);
?>
<div class="area">
  <input type="submit" name ="submit" class = "btn" value="Create News">
</div>
</form>
</div>
<?php  }
else {
  echo"not a teacher";
  }?>

</body>
</html>
