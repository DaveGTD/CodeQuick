<!DOCTYPE html>
<html>
<body>

	<form action="fileUploadSubmit3.php" enctype="multipart/form-data" method="post">

	    <div>
	        <label for='upload'>Add Attachments:</label>
	        <input id='upload' name="upload[]" type="file" multiple="multiple" />
	    </div>

	    <p><input type="submit" name="submit" value="Submit"></p>

	</form>
</body>
</html>
