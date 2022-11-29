<?php 

// PLEASE DONT REMOVE THIS 

// Code By : Justakazh 
// Github  : https://github.com/justakazh

// RESPECT FOR CODER :)


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Turu Search Engine</title>
  </head>
  <style type="text/css">
    body{
      font-family: sans-serif;
      background-color: #202124;
      color: #fff;
    }
  </style>
  <body>

    <div class="container">
        <div class="col-md-6 offset-3" style="margin-top: 200px;">
         <form action="" method="GET">
          <center>
            <img src="herp.png" width="300px;" class="mb-1">
            <h3>Turu Search Engine</h3>
          </center>
          <br>
          <div class="form-row align-items-center">
            <div class="col-md-10 my-1">
              <input type="text" name="q" placeholder="Insert The Keyword" class="form-control">
            </div>
            <div class="col-auto my-1">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </div>
        </form>
      <?php 
          if (isset($_GET['q'])) {
              echo "Sorry, we cannot show result for <b style='color:red'>".$_GET['q']. "</b> :(";
          }
         ?>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../../assets/js/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>


