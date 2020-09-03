<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Scp</title>
  </head>
  <body class='container bg-secondary'>

    <?php include 'db/connection.php'?>

       <h1>Scp</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="images/scp_logo.svg" class="img-fluid " style="width:50px; height:auto;">
      <img src="images/scp_logo.svg" style="width:50px; height:auto;">
  <a class="navbar-brand" href="#">Scp Foundation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Foundation<span class="sr-only">(current)</span></a>
      </li>
      <?php
     foreach ($record as $menu):

      ?>
      
      <li class="nav-item">
        <a class="nav-link" href="index.php?item='<?php echo $menu['item'];?>'"><?php echo $menu['item'];?></a>
      </li>
    <?php endforeach;?>
    <li class="nav-item">
       <a href="create.php" class="nav-link text-dark">Enter a new SCP Page Record</a>
     </li>
    <li class="nav">
     </ul>
  </div>
</nav>
<?php
 if(isset($_GET['item']))
 {
$scp=trim($_GET['item'],"'");
$item="select * from subject where item='$scp'";
$subject=$conn->prepare($item);
$subject->execute();
$display=$subject->fetch(PDO::FETCH_ASSOC);

$id=$display['id'];
echo"
<div class='card md-3'>
<h1 class='card-header text-center'>Subject:{$display['item']}.{$display['class']}</h1>
<div class='card-body'>
<p class='card-text'>{$display['object']}</p>
<h5 class='card-title'>Procedure</h5>
<p class='card-text'>{$display['procedure']}</p>
<p><img class='img-fluid' src='{$display['image']}' style='width:75%;height:auto;box-shadow:3px,3px,3px;margin-left:auto;margin-right:auto; display:block;'></p>
<h5 class='card-title'>Description</h5>
<p class='card-text'>{$display['description']}</p>
<a href='edit.php?id={$id}' class='btn btn-warning'>Update record</a>
<a href='#' onclick='delete_record({$id})' class='btn btn-danger'>Delete</a>
</div>
</div>

";
}
else
{
  echo'
  <div class="card">
  <div class="card-header">
   SCP application
  </div>
  <div class="card-body">
    <h5 class="card-title">Welcome to the SCP application</h5>
    <p class="card-text">Click on the menu to view SCP subject.</p>
    <img src="images/bg.png" class="img-fluid " style="width:1000px; height:500;">
  </div>
</div>';

}
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
 <?php
        
        $delete=isset($_GET['action']) ? $_GET['action'] :"";

        //if directed from delete.php
        if($delete =='deleted')
        {
            echo "<div clas='alert alert-success'>Records was deleted</div>";
        }
 
 
 ?>
 <script>
function delete_record(id)
{
    var answer=confirm('ok to delete this recpord');
    if(answer)
    {
      window.location='delete.php?id=' + id;
    }
}

 </script>
 
    
  </body>
</html>