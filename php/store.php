 <html>
 <link rel= "stylesheet" type="text/css" href="../css/store.css">
 <body>
<?php
include('connect.php');
if(isset($_POST['submit'])){
$name = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['password'];
$password = md5($pass);
$dropdown = $_POST['id'];
}

if(!empty($name)&& !empty($email)&& !empty($username)&& !empty($password))
{

  $sql1 = "SELECT * FROM users WHERE Email='$email'";
    $result = mysql_query($sql1,$conn);
    $result1 = mysql_fetch_array($result);
    if($result1)
    {

      echo "<p class = 'style'>You are already registered</p>";
    }
    else
    {
      $sql3 = "INSERT INTO users(Name,Email,Username,Password,Role_id) VALUES('$name','$email','$username','$password',$dropdown)";
      $sql = mysql_query($sql3, $conn);
      if($sql)
    {

      echo"<p>you are registered successfully</p>";
    }
    }
}

?>
</body>
</html>
