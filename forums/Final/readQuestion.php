

<script src="querymy.js"></script>
<?php
include_once('db.php');
$sql = "SELECT topicName, displayName from Topic";
$rs = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
 echo $row[''];
 echo $row['topicName']."\n"; 
 echo $row['displayName'];
 
}
mysqli_close($conn);
?>
