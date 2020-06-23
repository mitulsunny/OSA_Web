<!DOCTYPE html>
<html>
    
<head>
	<title>Upload Study Materials</title>
</head>
<body>
    
<form action="addFileHelper.php" method="POST" enctype="multipart/form-data">
    <h3>Please follow the naming stracture</h3>
    <input type="text" name="fileName">
	<input type="file" name="file"><br>
	<button type="submit" name="submit">Upload File</button>
	
</form>
</body>
</html>