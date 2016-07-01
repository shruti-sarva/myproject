
<?php
$nid= $_GET['value'];
include('connect.php');
include('../html/header.php');
if (isset($_POST['update'])) {
  //$nid = $_POST['nid'];
  $heading = $_POST['heading'];
  $descr = $_POST['description'];
  echo "$heading";
  echo "$descr";



  if(empty($heading) && empty($descr)) {
    echo "fields are empty";
  }
  else
  {
    $re6= mysql_query("UPDATE News set Heading = '$heading' , Description = '$descr' where News_id = $nid");
    header("Location: post_news.php");
  }
}

?>
<?php

$re7 = mysql_query("SELECT * FROM News where News_id = $nid");
$res = mysql_fetch_array($re7);

  $heading = $res['Heading'];
  $descr = $res['Description'];

?>
<html>
  <head>
  </head>
  <link rel= "stylesheet" type="text/css" href="../css/edit.css">
  <body>
  <div class = "outer">
    <form action = "<?php $_PHP_SELF ?>" method = "post" class = "formholder">
    <div  class= "text">
      <input type = "text" class = "input" name = "heading" placeholder = "Heading" value = "<?php echo "$heading";?>"></div>
      <div class="text">
      <textarea rows="10" cols="50" class = "input" name="description" palceholder = "Enter text here..." >
      <?php echo "$descr";?></textarea></div>
      <div class = "text btn">
      <input type = "submit" class = "click" name = "update" value = "update">
      </div>
    </form>
    </div>
  </body>
</html>

