<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>scp</title>
  </head>
  <body class="container">
      <?php include "app/connection.php" ?>
      
    <div class="row">
         
       <div class="col">
</div> 
</div>
 <ul class ="nav navbar-light bg-light">

 <?php foreach($result as $page): ?>

    <li class="nav-item active">
         <a href="index.php?page=' <?php echo $page['pg']; ?>'" class="nav-link">Enter a new page Record</a>
     </li>
 <?php endforeach; ?>


     <li>
         <a href="form.php" class="nav-link">Enter a new page Record</a>
     </li>
</ul>
<div class="row">
         
         <div class="col">
             <?php
             if(isset($_GET['page']))
             {
                $pg = trim ($_GET['page'], "'");

                $record = $connection->query("select * from pages where pg='$pg'") or die($connection->error());

                $row = $record->fetch_assoc();

                $h1 = $row['h1'];
                $h2 = $row['h2'];
                $h3 = $row['h3'];

                $p1 = $row['p1'];
                $p2 = $row['p2'];
                $p3 = $row['p3'];

                $img1 = $row['img1'];
                $img2 = $row['img2'];
                $img3 = $row['img3'];


                echo "
                <h1>{$pg}</h1>
                <h2>{$h1}</h2>
                <p1><img src='{$img1}'></p>
                <p>{$p1}</p>
                <p>{$p2}</p>
                <p>{$p3}</p>
                
                ";
             }
             else
             {
                echo "
                <h1>Welcome to this database driven website</h1>
                <p class='text-centre'>use the links above to view pages stored in the database</p>
                <p class='text-centre'><img src='images/banner.png</p>
                
                ";     

            


             }
  </div> 
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>