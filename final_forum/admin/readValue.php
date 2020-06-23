 <?php
 
 include_once('db_connection.php');
$topic = strval($_GET['q']);

$sql = "SELECT pageName, pageValue from Page where pageName='".$topic."'";
        $rs = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
         echo $row[''];
      $pageNa=$row['pageName'];
      $ans=$row['pageValue'];
      echo "$pageNa|$ans";
        
        }

mysqli_close($conn);
?>
<?php
     
?>