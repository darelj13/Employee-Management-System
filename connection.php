<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con=mysqli_connect("localhost","root","","ddesigns");

if(mysqli_connect_error())
{
  echo "Cannot Connect";
}


 ?>
