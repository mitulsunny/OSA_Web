<html>
<?php

//set up connection credentials

$servername = "localhost";
$username = "id9683453_mitulasad";
$password = "12345";
$dbname = "id9683453_guidance";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//gather the data from the form

// $firstName = $_POST["firstName1"];
// $lastName = $_POST["lastName1"];
// $email = $_POST["email"];
// $password = $_POST["password1"];
// $gender = $_POST["gender1"];
// $access = $_POST["access1"]; 
$firstName="Md";
$lastName="Obaidulla";
$email="mitul.li@yahoo.com";
$password="7416Mitul";
$gender="M";
$access="user";

    $sql = "INSERT INTO Users (firstName, lastName, email, password,gender,access) VALUES('$firstName', '$lastName', '$email','$password','','$access')";
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