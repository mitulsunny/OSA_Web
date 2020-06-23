 <?php
 include_once('db_connection.php');
  $topic=$_POST["pageName"];
  $value=$_POST["pageValue"];
  //replacing | with space as the xmlhttp post methid is not passing space sign
  $values=str_replace("|", "&nbsp;", $value);
  $sql = "UPDATE Page SET pageValue='$values' WHERE pageName='$topic'";
if (mysqli_query($conn, $sql)) {
echo "You have successfully updated";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>