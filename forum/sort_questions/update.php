<?php
$servername = "localhost";
$username = "u185312781_tech";
$password = "01723Sunny@";
$dbname = "u185312781_osa";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$question=$_POST['question1'];
$answer=$_POST['answer'];
$topic=$_POST['topic'];
$QuestionId=$_POST['QuestionId'];
// $question="Testing";
// $answer="test";
// $topic="myTest";
// $QuestionId=1;

$sql="UPDATE Questions set question='$question', answer='$answer' , topic='$topic' where QuestionId=$QuestionId";
if($conn->query($sql)===TRUE){
    echo "The Question Is Updated!!!!";
}
?>