<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Enter a new subject</title>
  </head>
     <body class="container">
      <h1 class="page_header">Create a new !</h1>
      <?php
        
        if($_POST)
        {
            include 'db/connection.php';

            try
            {
                  $query="insert into subject set item=:item,object=:object,image=:image,procedure=:procedure,description=:description,reference=:reference,additional=:additional";

                  
                  $statement=$conn->prepare($query);

                  $item=htmlspecialchars(strip_tags($_POST['item']));
                   $object=htmlspecialchars(strip_tags($_POST['object']));
                    $image=htmlspecialchars(strip_tags($_POST['image']));
                     $procedure=htmlspecialchars(strip_tags($_POST['procedure']));
                      $description=htmlspecialchars(strip_tags($_POST['description']));
                       $reference=htmlspecialchars(strip_tags($_POST['reference']));
                  $Additional=htmlspecialchars(strip_tags($_POST['additional']));
              
                      $statement->bindParam(':item',$item);
                      $statement->bindParam(':object',$object);
                      $statement->bindParam(':image',$image);
                      $statement->bindParam(':procedure',$procedure);
                      $statement->bindParam(':description',$description);
                      $statement->bindParam(':reference',$reference);
                      $statement->bindParam(':additional',$additional);
    
                  if($statement->execute())
                  {
                    echo"<div class='alert alert-success'>Record was created</div>";
                  }
                  else
                  {
                    echo"<div class='alert alert-danger'>Unable to save record</div>";
                  }

            }
            catch(PDOException $exception)
            {
                 die('ERROR: ' . $exception->getMessage());
            }
        }

    ?>
    <h2>please enter a new SCP file </h2>
    <form class="form-group bg-dark text-light p-5"class="form-group bg-dark text-dark p-5" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <label>Item:</label>
    <br>
    <input type="text" name="item" class="form-control">
    <br>
    <label>Object:</label>
    <br>
    <input type="text" name="object" class="form-control">
    <br>
    <label>Image:</label>
    <br>
    <input type="text" name="image" class="form-control">
    <br>
    <label>procedure:</label>
    <br>
    <input type="text" name="procedure" class="form-control">
    <br>
    <label>Description:</label>
    <br>
    <input type="text" name="description" class="form-control">
    <br>
    <label>Reference:</label>
    <br>
    <input type="text" name="reference" class="form-control">
    <br>
    <label>Additional</label>
    <br>
    <input type="text" name="additional" class="form-control">
    <br>
    <input type="submit" value="Save" class="btn btn-primary">
    </form>
    <p><a href="index.php" class="btn btn-warning">Back to index page</a></p>

<img src="images/cr.png" class="img-fluid " style="width:1000px; height:200;">


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>