<?php

require("azure_php/azure_functions.php");


$con = mysqli_connect("104.154.28.180", "remote", "remoteroot", "code_quick");

// check database connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . "\n";
}

function construct_blob_path($fileName, $username)
{

}


// uploadCall("radiology", "some_file.txt");


?>
