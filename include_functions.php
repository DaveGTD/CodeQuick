<?php

$con = mysqli_connect("localhost", "remote", "remoteroot", "code_quick");

// check database connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . "\n";
}




?>