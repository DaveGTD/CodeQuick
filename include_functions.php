<?php

require("azure_php/azure_functions.php");


$con = mysqli_connect("104.154.28.180", "remote", "remoteroot", "code_quick");

// check database connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . "\n";
}

function upload_file($specialty, $file_name, $user_email, $batch_id)
{
	 $blob_path = $specialty . "_" . $user_email . "_" . $batch_id . "_" . $file_name;

	 $azure_upload_status = uploadToAzure($specialty, $blob_path);

	 if($azure_upload_status == true)
	 {
		 	return "Successfully uploaded $file_name";
	 }
	 else
	 {
	 		return "Failed to upload $file_name";
	 }

}


?>
