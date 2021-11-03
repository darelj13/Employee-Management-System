<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="delete.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand">D-Designs</a>
    <form class="d-flex" method="POST">
    </form>
    <div class="button">
        <input class="btn btn-dark btn-lg cust" type="submit" name="submit" value="Dashboard" onclick="document.location='dashboard.php'">
    </div>
  </div>
</nav>
<div class="col-md-12">
  <div class="card mt-4">
    <div class="card-body">
      <table class="table table-bordered">
        <thead class="table-success">
          <tr>
            <th>Emp ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Designation</th>
            <th>Linkedin</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

              $query = "SELECT * FROM empdb ORDER BY EmpID ASC";
              $query_run = mysqli_query($con,$query);
              if($query_run){
                while($row=mysqli_fetch_assoc($query_run)){
                  $id=$row['EmpID'];
                  $name=$row['Name'];
                  $email=$row['Email'];
                  $phone=$row['Phone'];
                  $desig=$row['Designation'];
                  $linked=$row['Linkedin'];
                  echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$desig.'</td>
                    <td>'.$linked.'</td>
                    <td><button class="btn btn-danger"><a href="deleteDetails.php?deleteid='.$id.'" style="color: white; text-decoration: none;"> Delete</a></button></td>
                    </tr>';

                }
              }

?>



        </tbody>
      </table>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
