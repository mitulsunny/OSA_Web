 <?php
 include_once('db_connection.php');
   $topic=$_POST["topicName"];
   $value=$_POST["topicValue"];
 //  $topic="Selenium";
 //echo $topic;
//   $values=str_replace("|", "&nbsp;", $value);
  $sql = "UPDATE Page_Production SET pageValue='$value' WHERE pageName='$topic'";
if (mysqli_query($conn, $sql)) {
    
    
//echo "You have successfully updated   ".$topic."  ".$value;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>