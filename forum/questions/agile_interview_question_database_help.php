<?php
      //database details
    $servername = "localhost";
    $username = "u185312781_tech";
    $password = "01723Sunny@";
    $dbname = "u185312781_osa";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
  if(!$conn){
  die('Mysql connection error '.mysql_error());
 }
 
 $db = mysql_select_db('population',$conn);
 if(!$db){
  die('Database selection failed '.mysql_error());
 }
 
 $sql = 'SELECT *FROM Questions';
 
 $result = mysql_query($sql,$conn);
 
 
 $data = array();
 while($row = mysql_fetch_array($result)){
  $row_data = array(
   'question' => $row['question'],
   'answer' => $row['answer'],
    'topic' => $row['topic'],
    'note' => $row['note']
   );
  array_push($data, $row_data);
 }
 
 echo json_encode($data);
?>