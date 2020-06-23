<html>
<?php

//set up connection credentials

$servername = "localhost";
$username = "u185312781_tech";
$password = "01723Sunny@";
$dbname = "u185312781_osa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//gather the data from the form

$topic = $_POST["topic1"];

$sql = "SELECT question, answer, note, topic from Questions";
$rs = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
    // If you want to display the results one by one
    echo $row['']; 
    echo $row['answer'];
}

?>
</html>