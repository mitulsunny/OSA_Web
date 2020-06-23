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

$question = $_POST["question1"];
$answer1 = $_POST["answer1"];
$comments = $_POST["comments1"];
$topics = $_POST["topics1"];
$answer=str_replace(array("<",">","\n"),
    array( "&#60;","&#62;","<br/>"),$answer1);
//$answer=str_replace("\n", "<br/>", $answer1);

// $question="Mitul";
// $answer="sunny";
// $comments="everything";

    $sql = "INSERT INTO Questions (question, answer, note, topic,position_order) VALUES('$question', '$answer', '$comments','$topics',1)";
    if (mysqli_query($conn, $sql)) {
    echo "Success!!";
    ?>
   
    <?php
     header("Location:readAllProduct.php");
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
  } 


?>
</html>