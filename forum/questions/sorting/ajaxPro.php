<?php 


require('db_config.php');


$position = $_POST['position'];


$i=1;
foreach($position as $k=>$v){
    $sql = "Update Questions SET position_order=".$i." WHERE QuestionId=".$v;
    $mysqli->query($sql);
	$i++;
}


?>