<?php
  $hostname = "localhost";
  $username = "id19258067_abirett";
  $password = "N3qqKwIS8d4dx)dn";
  $dbname = "id19258067_bondhu";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
