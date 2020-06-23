
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = strval($_GET['q']);

$con = mysqli_connect('localhost','u185312781_tech','01723Sunny@','u185312781_osa');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"ajax_demo");
$sql = "SELECT * from Questions where topic='".$q."'";
$result = mysqli_query($con,$sql);
$count=0;
while($row = mysqli_fetch_array($result)) {
   $count++;?>
    
    <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $count.") ".$row['question'];?></b><br>
      <?php echo $row['answer'];?><br><br><br>
    <?php
}
mysqli_close($con);
?>
</body>
</html>