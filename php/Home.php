<!DOCTYPE HTML>
 <html>
 <link rel= "stylesheet" type="text/css" href="../css/table.css">
 <body>
<?php

require('connect.php');
include('../html/header.php');


$uid = $_SESSION['uid'];
$username = $_SESSION['username'];
 $id = $_SESSION['id'];
$id = isset($_SESSION['id']) ? $_SESSION['id'] : NULL;
if($id == 1 || $id == 2)
{
if(isset($_SESSION['username']))
{
 // echo "<p class='username'>$username</p>";

}
$get_news = "SELECT Heading , News_id from News where Teachers_id = $uid";
$get_ess = "SELECT Heading , E_id from T_essential where Teachers_id = $uid";

?>
  <div class = "radio" >
  <form action ="<?php $_PHP_SELF ?>" method = "post" class = "name_add" >
    <input type = "radio" name = "radio" value = 0 checked >News Article </input>
    <input type = "radio" name = "radio" value = 1 >Teacher Essential </input>
    <input type="submit" class = "select" name="submit" value="SELECT">
  </form>
  </div>

  <?php
  if (isset($_POST['submit'])) {
    echo '<table>
  <tr> <th>S.NO.</th>';
    $radio = $_POST['radio'];
  if ($radio == 0) {
    echo '<th>ARTICLE HEADING</th> <th>EDIT</th> </tr>';
    $result5 = mysql_query($get_news ,$conn);
    $i = 1;
  while($row = mysql_fetch_array($result5))
 {

  $heading = $row['Heading'];
  echo "<tr><td>$i</td>";
  echo "<td>$heading</td>";
  echo '<td><a href = "edit.php?value='.$row['News_id'].'">EDIT</a></td></tr>';
  $i++;
  }

  }

  elseif ($radio == 1) {
    echo '<th>TEACHING ESSENTIALS </th> <th>EDIT</th> </tr>';
   $result6 = mysql_query($get_ess ,$conn);
   $j = 1;
  while($row = mysql_fetch_array($result6))
 {

  $heading = $row['Heading'];
  echo "<tr><td>$j</td>";
  echo "<td>$heading</td>";
  echo '<td><a href = "edit1.php?value='.$row['E_id'].'">EDIT</a></td></tr>';
  $j++;
  }
}
echo'</table>';
  }

}
else
{
  echo "Welcome &nbsp" .  $username;
}


//include('footer.php');
?>
</body>
</html>




