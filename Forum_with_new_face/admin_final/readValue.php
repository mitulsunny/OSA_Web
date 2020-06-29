 <?php
 
 include_once('db_connection.php');
$topic = strval($_GET['q']);

$sql = "SELECT PageId, pageName, pageValue from Page where pageName='".$topic."'";
        $rs = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
         echo $row[''];
         
      $to=$row['pageName'];
      $ans=$row['pageValue'];
      $pageId=$row['PageId'];
      echo "$to|$ans|$pageId";
        
        }

mysqli_close($conn);
?>
<?php
     
?>