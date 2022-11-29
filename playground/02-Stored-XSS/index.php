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
    <title>- Justakazh Search Engine - </title>
  </head>
  <style type="text/css">
    body{
      font-family: sans-serif;
    }
  </style>
  <body>
<form action="comment.php" method="post">
  <button class="btn btn-sm btn-danger" name="reset">reset</button>
</form>
    <div class="container mt-5">
        <!-- title -->
        <div class="row">
          <div class="col-md-6 offset-3">
            <h1>I Just Wanna Be a Hacker!</h1>
            <p style="font-size: 10px;">Writed by : Justakazh</p>
            <hr>
          </div>
        </div>
        <!-- content -->
        <div class="row">
          <div class="col-md-6 offset-3">
            <center><img src="diluarnalar.jpg" width="400px"></center><br>
            <p>This is just dummy article Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 offset-3">
            <form action="comment.php" method="post">
              <textarea class="form-control" name="comment" placeholder="write anonymous comment here"></textarea>
              <br>
              <button class="btn btn-primary btn-sm" name="submit">Submit</button>
            </form>
            <hr>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-md-6 offset-3">
            <?php 

              include "../config.php"; 
              $q = mysqli_query($conn, "SELECT * FROM `comment` ");
              while ($data = mysqli_fetch_array($q)){
                ?>
                <div class="bantal" style="background-color:#eaeaea;">
                  <b>Anonymous</b>
                  <p>

                    <?= $data['comment_text'] ?>
                  </p>
                </div>
                <?php
              }

             ?>
          </div>
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


