<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Scp</title>
  </head>
  <body class="container">
      <h1>scp</h1>
      <h2> Use the form to add a new record</h2>
      <form class="form-group" method="post" action="app/connection.php">
      <LABEL> Page name</label>
      <br>
      <input type="text" class="form-control" name="pg" placeholder="Page Name" Required>
      <br><br>
      <label> Heading one </label>
      <br>
      <input type="text" class="form-control" name="h1" placeholder="Heading one" Required>
      <br><br>
      <label> Paragraph one</label>
      <br>
      <textarea class="form-control" name="p1" rows="5" required></textarea>
      <br><br>
      <label>Image one</label>
      <br>
      <input type="text" class="form-control" name="img1" placeholder="Image one">
<br><br>
<hr width="75%">


<label> Heading two </label>
      <br>
      <input type="text" class="form-control" name="h2" placeholder="Heading two">
      <br><br>
      <label> Paragraph two</label>
      <br>
      <textarea class="form-control" name="p2" rows="5"></textarea>
      <br><br>
      <label>Image two</label>
      <br>
      <input type="text" class="form-control" name="img2" placeholder="Image two">
<br><br>
<hr width="75%">


<label> Heading three</label>
      <br>
      <input type="text" class="form-control" name="h3" placeholder="Heading three">
      <br><br>
      <label> Paragraph three</label>
      <br>
      <textarea class="form-control" name="p3" rows="5" ></textarea>
      <br><br>
      <label>Image three</label>
      <br>
      <input type="text" class="form-control" name="img3" placeholder="Image three">
<br><br>
<hr width="75%">

<input type="submit" class="btn btn-primary" name="submit" value="submit Page Data">
</form>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>