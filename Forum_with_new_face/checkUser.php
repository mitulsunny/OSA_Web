<?php
// include "config.php";
 include_once('config.php');
 $uname = mysqli_real_escape_string($conn,$_POST['username']);
 $password = mysqli_real_escape_string($conn,$_POST['password']);

if ($uname != "" && $password != ""){

   // $sql_query = "select count(*) as cntUser from User_Production where email='".$uname."' and password='".$password."'";
    $sql_query = "select firstName,lastName,userType, userStatus, count(*) as cntUser from User_Production where email='".$uname."' and password='".$password."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];
    
    if($count > 0){
        if($row['userStatus']=="active"){
        if($row['userType']=="admin"){
        session_start();
         $_SESSION['uname'] = $row['firstName'].". ".$row['lastName'];
         $_SESSION['timestamp']=time();
        echo 2;  
        }else{
        session_start();
        $_SESSION['uname'] = $row['firstName']." ".$row['lastName'];
        $_SESSION['timestamp']=time();
        echo 1;
        }
      }else{
          echo 3;
      }    
    }else{
        echo 0;
    }

}