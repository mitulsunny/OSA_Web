<?php
if(isset($_POST['submit'])){

	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed =  array('jpg','jpeg','png', 'pdf','zip','txt');

	if(in_array($fileActualExt, $allowed)){
      if($fileError === 0){
      		if($fileSize<500000000){
      				$fileNameNew=uniqid('', true).".".$fileActualExt;
					  $fileDestination= 'uploads/'.$fileNameNew;
					  
//working to setup database connection and insert into table 
$servername = "localhost";
$username = "u185312781_tech";
$password = "01723Sunny@";
$dbname = "u185312781_osa";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$FileName = $_POST['fileName'];

//$sql="INSERT INTO ClassFile(FileName,TemFileName)VALUES('MyTest','MyTesting.zip')";
$sql = "INSERT INTO ClassFile (FileName,TemFileName) VALUES('$FileName', '$fileNameNew')";
if (mysqli_query($conn, $sql)) {
    echo "Success!!";
     
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
  } 


					  move_uploaded_file($fileTmpName, $fileDestination);

      				header("Location: addFile.php? uploadsuccess");
      		}else{
      			echo "Your file size is too big";
      		}
      }else{
      	echo "There was an error uploading your file";
      }

	}else{
		echo "You can not upload this type of file!!";
	}
}
?>
















