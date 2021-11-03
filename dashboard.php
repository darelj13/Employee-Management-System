<?php
  session_start();
  if(!isset($_SESSION['AdminLoginId']))
  {
    header("location: index.php");
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dash.css">
    <meta charset="utf-8">
    <title>D-Designs Dashboard</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container-fluid">
      <a href="" class="navbar-brand"><img src="" alt="">D-Designs</a>
      <form class="d-flex" method="post">
          <button class="btn btn-outline-dark logout-dash" name="logout" type="submit">Log Out</button>
      </form>
      </div>
    </nav>
    <div class="rect1">
      <div class="left1">
      <img src="images/img2.png" alt="">
    </div>
    <div class="right1">
        <button type="button" onclick="document.location='insert.php'" class="btn btn-outline-dark btn-lg butt butt1" name="insert" type="submit">Insert New Data</button>
        <button type="button" onclick="document.location='view.php'" class="btn btn-outline-dark btn-lg butt">View Data</button>
        <button type="button" onclick="document.location='update.php'" class="btn btn-outline-dark btn-lg butt">Update Data</button>
        <button type="button" onclick="document.location='delete.php'" class="btn btn-outline-dark btn-lg butt butt4">Delete Data</button>

    </div>
    </div>

    <?php
      if(isset($_POST['logout']))
      {
        session_destroy();
        header("location: index.php");
      }
     ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
