<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Multiple File Ppload with PHP</title>
</head>
<body>
  <form action="fileUploadSubmit2.php" method="post" enctype="multipart/form-data">
    <input type="file" id="file" name="files[]" multiple="multiple" />
  <input type="submit" value="Upload!" />
</form>
</body>
</html>
