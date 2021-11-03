<?php
  include("connection.php");
  if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql="DELETE FROM EMPDB WHERE EmpID = $id";
    $result=mysqli_query($con,$sql);
    if($result){
      echo "<script>alert('Deleted data successfully');
      window.location.href = 'delete.php'; </script>";
    }
  }
?>
