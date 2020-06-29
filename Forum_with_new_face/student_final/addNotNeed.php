 <?php
 include_once('db_connection.php');
// $topic='sdfsdlkj';
 $topic=$_POST['pageName'];
 $values=$_POST['pageValue'];
//$topic = strval($_GET['q']);

 $sql = "INSERT INTO Page(pageName,pageValue) VALUES ('$topic','$values')";
 $sql1 = "INSERT INTO Page_Production(pageName,pageValue) VALUES ('$topic','$values')";
 
if (mysqli_query($conn, $sql)&&mysqli_query($conn, $sql1)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>