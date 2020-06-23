 <?php
 include_once('db_connection.php');
 $pageName=$_POST["topicName"];
 $pageValue=$_POST["topicValue"];
 
 //$sql = "INSERT INTO Page(pageName,pageValue) VALUES ('first', '$pageValue')";
  $sql= "UPDATE Page set pageValue='$pageValue' where pageName='Selenium'";
//$sql = "UPDATE Page set pageValue='$pageValue' where pageName = 'Selenium';

if (mysqli_query($conn, $sql)) {
    header('Location:admin_page.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>