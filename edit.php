<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>update scp record</title>
  </head>
  <body class="container">
    <?php

      $id=isset($_GET['id'])? $_GET['id']:die('Error:Record Id not found.');

    include 'db/connection.php';
     
      try{

        
  $query="select * from subject where id=:id ";
  $read=$conn->prepare($query);
  $read->bindparam(":id",$id);
  $read->execute();
  $row=$read->fetch(PDO::FETCH_ASSOC);

  $item=$row['item'];
  $object=$row['object'];
  $procedure=$row['procedure'];
    $image=$row['image'];
  $description=$row['description'];
   $reference=$row['reference'];
 $additional=$row['additional'];


 
  }

catch(PDOException $exception)
{
  die('Error:' .$exception->getmessage());
}

if($_POST)
{
  try
  {

  //inseret query 
$query="update  subject set item=:item,object=:object,image=:image,procedure=:procedure,description=:description,reference=:reference,additional=:additional where id=:id";
$update=$conn->prepare($query);
//here we have creted parameter
$id=htmlspecialchars(strip_tags($_POST['id']));
$item=htmlspecialchars(strip_tags($_POST['item']));
$object=htmlspecialchars(strip_tags($_POST['object']));
$image=htmlspecialchars(strip_tags($_POST['image']));
$procedure=htmlspecialchars(strip_tags($_POST['procedure']));
$description=htmlspecialchars(strip_tags($_POST['description']));
$reference=htmlspecialchars(strip_tags($_POST['reference']));
$additional=htmlspecialchars(strip_tags($_POST['additional']));


//we have to bind paramater which we have set above..
$update->bindparam(':id',$id);
$update->bindparam(':item',$item);
$update->bindparam(':object',$object);
$update->bindparam(':image',$image);
$update->bindparam(':procedure',$procedure);
$update->bindparam(':description',$description);
$update->bindparam(':reference',$reference);
$update->bindparam(':additional',$additional);

 
 if($update->execute())
                  {
                    echo"<div class='alert alert-success'>Record {$id} was updated.</div>";
                  }
                  else
                  {
                      echo"<div class='alert alert-danger'>Unable to update recorder.Please try again.</div>";
                  }
 
}
catch(PDOException $error)
{
  die( 'error:'.$error->getMessage());
}
}
 else
            {
              echo "<div class='alert alert-danger'>Record is ready to be updated</div>";
            }
    ?>

    <h1>Create a new scp subject</h1>
    <a href='index.php' class='btn btn-secondary'>Return Back to home page</a>
    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"] ."?id=". $id);?>' method='POST' class='from-group'>
      <br>
    <input type='hidden' name='id' value='<?php echo htmlspecialchars($id, ENT_QUOTES); ?>'placeholder="Page Name" require>
    <br><br>
      <Label>SCP Item :</Label>
      <br>
      <input type ='text' name='item' class='form-control'value='<?php echo htmlspecialchars($item,ENT_QUOTES);?>'>
      <br>
       <Label>Object:</Label>
      <br>
      <input type ='text' name='object' class='form-control'value='<?php echo htmlspecialchars($object,ENT_QUOTES);?>'>
      <br>
       <Label>Description:</Label>
      <br>
      <input type='text' name='description' class='form-control' value='<?php echo htmlspecialchars($description,ENT_QUOTES);?>'>
      
     <br>
     <label>Image:</label>
     <input type='text' name='image' class='form-control' value='<?php echo htmlspecialchars($image,ENT_QUOTES);?>'>
     <br>
     <br>
        <Label>Procedure:</Label>
      <br>
      <input type='text' name='procedure' class='form-control' value='<?php echo htmlspecialchars($procedure,ENT_QUOTES);?>'>
     <br>
     <br>
        <Label>Reference:</Label>
      <br>
      <input type='text' name='reference' class='form-control' value='<?php echo htmlspecialchars($reference,ENT_QUOTES);?>'>
      <br>
        <Label>Additional:</Label>
      <br>

      <input type='text' name='additional' class='form-control'value='<?php echo htmlspecialchars($additional,ENT_QUOTES);?>'>

     <input type='submit'  class='btn btn-primary' name='update' value='Save Changes'>


    </form>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj'crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
  </body>
</html>