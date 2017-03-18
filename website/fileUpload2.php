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


<script>

//get the input and UL list
var input = document.getElementById('file');
var list = document.getElementById('fileList');

//empty list for now...
while (list.hasChildNodes()) {
	list.removeChild(ul.firstChild);
}

//for every file...
for (var x = 0; x < input.files.length; x++) {
	//add to list
	var li = document.createElement('li');
	li.innerHTML = 'File ' + (x + 1) + ':  ' + input.files[x].name;
	list.append(li);
}

</script>



<br>
<br>

<div id="fileList">
</div>



</body>
</html>
