<?php
$eid= $_GET['value'];
//$eid = $_GET['$x'];
include_once("connect.php");

if (isset($_POST['update'])) {
  //$nid = $_POST['nid'];
  $topic = $_POST['topic'];
  $heading = $_POST['heading'];
  $descr = $_POST['description'];
  echo "$topic";
  echo "$heading";
  echo "$descr";



  if(empty($heading) && empty($descr) && ($topic)) {
    echo "fields are empty";
  }
  else
  {
    $re8= mysql_query("UPDATE T_essential set  Topic = '$topic', Heading = '$heading' , Description = '$descr' where E_id = $eid");
    header("Location: post_essential.php");
  }
}

?>
<?php

$re9 = mysql_query("SELECT * FROM T_essential where E_id = $eid");
$res4 = mysql_fetch_array($re9);
  $topic = $res4['Topic'];
  $heading = $res4['Heading'];
  $descr = $res4['Description'];

?>
<html>
  <head>
  </head>
  <body>
    <form action = "<?php $_PHP_SELF ?>" method = "post">
    <input type = "text" name = "topic" placeholder = "Topic" value = "<?php echo "$topic";?>">
      <input type = "text" name = "heading" placeholder = "Heading" value = "<?php echo "$heading";?>">
      <textarea rows="4" cols="50" name="description" palceholder = "Enter text here..." >
      <?php echo "$descr";?></textarea>
      <input type = "submit" name = "update" value = "update">
    </form>
  </body>
</html>

