<?php
//if(isset($_POST['username']) && isset($_POST['password'])){
$username1=$_POST['username'];
$password1=$_POST['password'];
$position1=$_POST['position'];
//$position=$_POST['position'];
	//info of the webpage that we are going to connect
$servername = "localhost";
$username = "u185312781_tech";
$password = "01723Sunny@";
$dbname = "u185312781_osa";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
 	 die("Connection failed: ".mysqli_connect_error());
	}
	$data=mysqli_query($conn, "SELECT * from userT where username='{$username1}' AND password='{$password1}' AND position='{$position1}'");
	$row_cnt = mysqli_num_rows($data);
	if($row_cnt == 1){
	   $row = mysqli_fetch_array($data);
		//$username = $row['username'];
     	session_start();
  		$_SESSION['user'] = '1';
  		$_SESSION['timestamp']=time();
		echo "success";
	}else{
		echo "failed";
	}

//}

?>