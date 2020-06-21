<?php

$user = "a3001598_a30015987";
$pw = "Toiohomai1234";
$db = "a3001598_ScpWebsite"

//Database connection
$connection = new mysql('localhost', $user, $pw, $db) or die(mysql_error($connection));

//creating variables
$result = $connection->query("selectc * from Scp") or die($connection->error());

if(isset($_POST['pg']))
{
  $pg =$_POST['pg'];

  $h1 = $_POST['h1'];
  $h2 = $_POST['h2'];
  $h3 = $_POST['h3'];

  $p1 = $_POST['p1'];
  $p2 = $_POST['p2'];
  $p3 = $_POST['p3'];

  $img1 = $_POST['img1'];
  $img2 = $_POST['img2'];
  $img3 = $_POST['img3'];

  $sql = "insert into pages(pg, h1, h2, h3, p1, p2, p3, img1, img2, img3)
  values('$pg', '$h1', '$h2','$h3', '$p1', '$p2', '$p3', $img', '$img2', '$img3')";

  if($connection->query($sql) === TRUE)
  {

    echo  "
    <h1>Record added successfully</h1>
    <p><a href='../index.php'>Back to index page</p>
    ";
  }
  else
  {
    
    echo  "
    <h1>Record added successfully</h1>
    <p>$connection</p>
    <p><a href='../index.php'>Back to index page</p>
    ";
  }

}
?>