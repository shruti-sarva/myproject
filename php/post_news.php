 <!DOCTYPE HTML>
 <html>
 <link rel= "stylesheet" type="text/css" href="../css/postnews.css">
 <body>
 <?php
include('connect.php');
include('../html/header.php');
if(isset($_POST['submit'])) {
$heading = $_POST['heading'];
$comment = $_POST['comment'];
$date = $_POST['date'];
$pid = $_POST['radio'];
echo  "$heading";
echo  "$comment";
echo  "$date";
//session_start();

}
$uid = $_SESSION['uid'];

//echo $uid;
if(empty($heading) && empty($comment)&& empty($date))
{
  //echo "Please fill out all the informations";
}
  else
  {

    $sql6 = "INSERT INTO News(Heading,Description,Teachers_id,Date,p_id) VALUES('$heading','$comment',$uid,'$date', $pid)";
      $sql7 = mysql_query($sql6, $conn);
      if($sql7)
      {
        echo "News added";
      }
  }


   $sql20 = "SELECT * from News where Teachers_id=$uid order by date desc";
   $result1 = mysql_query($sql20 ,$conn);
  while($row = mysql_fetch_array($result1))
 {
  $nid = $row['News_id'];
  $heading = $row['Heading'];
  $descr = substr($row['Description'],0,5);
  $pid = $row['p_id'];
  $tid = $row['Teachers_id'];
  if($uid == $tid){
 echo '<form action="show.php" method="post" class ="art">
       <input type="text" hidden name="nid" value="'.$nid.'"/>
       <label class = "user">HEADING:&nbsp</label>'.$heading.'<br>
       <label>pid:</label>'.$pid.'<br>
       <label class = "user">Description:&nbsp</label>'.$descr.'<br>
       <input type="submit" class = "touch" name="submit" value = "Read more"/>
       </form>';
  }
  else{
 if($pid==1){
 echo '
<form action="show.php" method="post" class = "art">
<input type="text" hidden name="nid" value="'.$nid.'"/>
  <label class="user">HEADING:&nbsp </label>'.$heading.'<br>
  <label>pid:</label>'.$pid.'<br>
  <label class = "user">Description:&nbsp </label>'.$descr.'<br>
  <input type="submit" name="submit" class = "touch" value = "Read more"/>
  </form>';

}
}
}

// elseif ($pid == 0)
// {
// $sql23 = "SELECT * from News where Teachers_id = $uid";
// $re5  = mysql_query($sql23, $conn);
// while($row = mysql_fetch_array($re5))
// {
//   echo "<label>TITLE:</label>".$row['Heading'];
//   echo "<label>DESCRIPTION:</label>".$row['Description'];
//   echo "<label>CREATED AT:</label>".$row['Date'];
// }

?>
</body>
</html>
