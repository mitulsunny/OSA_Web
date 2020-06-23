 <?php
 include_once('db_connection.php');
 $pageValue=$_POST["contain"];
 
 //$sql = "INSERT INTO Page(pageName,pageValue) VALUES ('first', '$pageValue')";
  $sql= "UPDATE Page set pageValue='$pageValue' where pageName='Selenium'";
//$sql = "UPDATE Page set pageValue='$pageValue' where pageName = 'Selenium';

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>