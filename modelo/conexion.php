<?php 


$conexion = mysqli_connect("localhost","root","","safedrive");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>