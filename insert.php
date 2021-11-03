<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="insert.css">
  </head>
  <body>
  <div class="container">
    <div class="title">Insert New Data</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Employee ID</span>
            <input type="text" placeholder="Enter your ID"  name="empid" required autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fname" required autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone" required autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Designation</span>
            <input type="text" placeholder="Designation" name="desig" required autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Linkedin Profile</span>
            <input type="text" placeholder="Enter profile URL" name="linkedin" required autocomplete="off">
          </div>
        </div>

        <div class="button">
          <input type="submit" name="submit" value="Submit">
        </div>
        <div class="button but">
          <input type="submit" name="submit" value="Dashboard" onclick="document.location='dashboard.php'">
        </div>
      </form>
    </div>
  </div>

  <?php
  if(isset($_POST['submit'])){
    $eid=$_POST['empid'];
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desig=$_POST['desig'];
    $linkedin=$_POST['linkedin'];
  }
    if((!empty($eid)) && (!empty($name)) && (!empty($email)) && (!empty($phone)) && (!empty($desig)) && (!empty($linkedin))){
    $query = "INSERT INTO EMPDB VALUES ('$eid','$name','$email','$phone','$desig','$linkedin')";
    mysqli_query($con, $query);
    echo "<script>alert('New Data entered'); </script>";
  }
   ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
