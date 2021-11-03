<?php
  include("connection.php");
  $id=$_GET['updateid'];
  $sql="SELECT * FROM EMPDB WHERE EmpID=$id";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['Name'];
  $email=$row['Email'];
  $phone=$row['Phone'];
  $desig=$row['Designation'];
  $linked=$row['Linkedin'];
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
    <div class="title">Update Data</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Employee ID</span>
            <input type="text" name="id" required autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fname" value=<?php echo $name; ?> required autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text"  name="email" value=<?php echo $email; ?> required autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text"  name="phone" value=<?php echo $phone; ?> required autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Designation</span>
            <input type="text"  name="desig" value=<?php echo $desig; ?> required autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Linkedin Profile</span>
            <input type="text"  name="linkedin" value=<?php echo $linked; ?> required autocomplete="off">
          </div>
        </div>

        <div class="button">
          <input type="submit" name="submit" value="Update Details">
        </div>
        <div class="button but">
          <input type="submit" name="submit" value="Dashboard" onclick="document.location='dashboard.php'">
        </div>
      </form>
    </div>
  </div>

  <?php

  if(isset($_POST['submit'])){
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desig=$_POST['desig'];
    $linkedin=$_POST['linkedin'];
  }
    if((!empty($id)) && (!empty($name)) && (!empty($email)) && (!empty($phone)) && (!empty($desig)) && (!empty($linkedin))){
    $query = "UPDATE EMPDB SET EmpID=$id,Name='$name',Email='$email',Phone='$phone',Designation='$desig',Linkedin='$linkedin' WHERE EmpID=$id";
    $result=mysqli_query($con, $query);
    if($result){
    echo "<script>alert('Updated Data');
    window.location.href = 'update.php'; </script>";
  }
  }
   ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
