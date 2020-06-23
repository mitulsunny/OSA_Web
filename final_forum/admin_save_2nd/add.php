 <?php
 include_once('db_connection.php');
// $topic='sdfsdlkj';
 $topic=$_POST['pageName'];
 $values=$_POST['pageValue'];
//$topic = strval($_GET['q']);

 $sql = "INSERT INTO Page(pageName,pageValue) VALUES ('$topic','$values')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>