<!DOCTYPE html>
<html>
<head>
<link rel= "stylesheet" type="text/css" href="../css/style1.css">
</head>
<?php

 $id = isset($_SESSION['id']) ? $_SESSION['id'] : NULL;
$id = $_SESSION['id'];

$username = $_SESSION['username'];
?>
<body>

<div class = "header">
<?php
//session_start();

echo "<div class= 'menu'><ul>";
$menus = getMenu($id);
foreach ($menus as $menu) {
 echo '<li><a class="add" href="http://localhost/Myproject/php/'. $menu["link"] .'"> '. $menu["title"] . '</a></li>';
    //echo '<li><a class="add" href="http://localhost/Myproject/php/'.$e.'.php">'.$e.'</a></li>';
}

echo"</ul></div>";
if (isset($id)) {
echo "<div class= 'nameout'><p class='username'>Welcome&nbsp$username</p></div>";
echo "<div class= 'log'><a  class = 'logout' href = 'logout.php'>LOGOUT</a></div>";
}
?>
</div>
</body>
</html>
<?php
function getMenu($a) {

if ($a == 1) {
  $menu = array();
  $menu[0]['title'] = 'HOME';
  $menu[0]['link'] = 'Home.php';

  $menu[1]['title'] = 'ADD USER';
  $menu[1]['link'] = 'Add_User.php';

  $menu[2]['title'] = 'ARTICLES';
  $menu[2]['link'] = 'News_articles.php';

  $menu[3]['title'] = 'ESSENTIALS';
  $menu[3]['link'] = 'Essentials.php';


   return $menu;

  //return array( 'Home','Add_User','about');
}
else if($a == 2) {
  $menu = array();
  $menu[0]['title'] = 'Home';
  $menu[0]['link'] = 'Home.php';

  $menu[1]['title'] = 'Create article';
  $menu[1]['link'] = 'Create_article.php';

  $menu[2]['title'] = 'Create essential';
  $menu[2]['link'] = 'Create_essential.php';

  $menu[3]['title'] = 'My Article';
  $menu[3]['link'] = 'post_news.php';

  $menu[4]['title'] = 'My Essential';
  $menu[4]['link'] = 'post_essential.php';

  $menu[5]['title'] = ' Articles';
  $menu[5]['link'] = 'News_articles.php';

  $menu[6]['title'] = ' Essentials';
  $menu[6]['link'] = 'Essentials.php';


  return $menu;


 // return array( 'Home','Create_article','Create_essential','post_news' , 'post_essential');
}
else if ($a == 3) {
  $menu = array();
  $menu[0]['title'] = 'Home';
  $menu[0]['link'] = 'Home.php';

  $menu[1]['title'] = ' ARTICLES';
  $menu[1]['link'] = 'News_articles.php';

  $menu[2]['title'] = 'ESSENTIALS';
  $menu[2]['link'] = 'ESSENTIALS.php';

  return $menu;
  //return array( 'Home','Essentials','Articles');
}
else  {
  echo "Not a registered user";
}
}



?>
