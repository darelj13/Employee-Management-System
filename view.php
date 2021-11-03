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
    <link rel="stylesheet" href="view.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand">D-Designs</a>
    <form class="d-flex" method="POST">
      <input class="form-control me-2" name="search" required type="search" value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>" placeholder="Search" aria-label="Search" autocomplete="off">
      <button class="btn btn-outline-dark" type="submit">Search</button>
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
          <tr style="text-align:center">
            <th>Emp ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Designation</th>
            <th>Linkedin</th>
          </tr>
        </thead>
        <tbody style="text-align:center">
          <?php
            if(isset($_POST['search'])){
              $filtervalues = $_POST['search'];
              $query = "SELECT * FROM empdb WHERE CONCAT(EmpID,Name,Email,Phone,Designation,Linkedin) LIKE '%$filtervalues%' ORDER BY EmpID ASC";
              $query_run = mysqli_query($con,$query);
              if(mysqli_num_rows($query_run) > 0){
                  foreach ($query_run as $items) {
                    ?>
                    <tr>
                      <td><?=$items['EmpID'];?></td>
                      <td><?=$items['Name'];?></td>
                      <td><?=$items['Email'];?></td>
                      <td><?=$items['Phone'];?></td>
                      <td><?=$items['Designation'];?></td>
                      <td><?=$items['Linkedin'];?></td>
                    </tr>
                    <?php
                  }
              }
              else{
                ?>
                <tr>
                  <td colspan="6" style="text-align:center;">No Records Found!</td>
                </tr>
                <?php
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
