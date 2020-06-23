<?php
//First step: connect to the database
//set the variables ...
$servername = "localhost";
$username = "id9683453_mitulasad";
$password = "12345";
$dbname = "id9683453_guidance";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<html>
    <head>
        <title>All Users</title>
        <style>
    .templete{width:1000px; background:white; color:black; margin:0 auto;}
    .clear{overflow:hidden;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  bottom: 0;
  left: 0;
  width: 17%;
  background-color: #f1f1f1;
  position: fixed;
  height: 85%;
  
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
   
	.firstPart{
	    background-color: #02B5FD;
        position: fixed;
       height:15%;
       margin: 0;
       left: 0;
       top:0;
       right:0;
		color:#2E4053;
		font-size:25px;
		width: 100%;
		text-align:center;
		border-left:2px solid black;
		border-right:2px solid black;
		}
	.secondPart{
        background-color:#E4DBBF;
        border-left:2px solid #E4DBBF;
        border-right:2px solid #E4DBBF;
        
    }
    .middlePart{
        margin: 0;
       left: -25px;
       top:0;
        background-color:#ECF0F1;
        border-left:2px solid #E4DBBF;
        border-right:2px solid #E4DBBF; 
        width:100%;
    }
	.lastPart{
	    height:100px;
	    background:black;
	    border-left:2px solid black;
		border-right:2px solid black;
	    color:gold;
	    font-size:20px;
	}


        </style>
    </head>
  <body class="body">
<div class="firstPart clear">
<h1 class="heade">OSA Consulting Tech</h1>
</div>
<div class="secondPart templete clear">
<br>
</div>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>All Users</h2>
 

<?php
//create the SQL statement
$sql = "SELECT firstName, lastName, email, password,gender,access from Users";

//query the databae
$rs = mysqli_query($conn,$sql);

$count=0;
?>
<div class="middlePart clear">
 <?php
while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
  
    // If you want to display the results one by one
    echo $row[''];
    //if($row['topic']=="java"){
          $count++;
?>
   &nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $count .") ". $row['firstName']; ?> </b><br>
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<I><b>lastNamee:</b></I> <?php echo $row['lastName'];?><br>  
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<b>Email :</b> <?php echo $row['email']; ?><br><br>
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<b>Password :</b> <?php echo $row['password']; ?><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<b>Gender :</b> <?php echo $row['gender']; ?><br><br>
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<b>Access :</b> <?php echo $row['access']; ?><br><br>
   
<?php
 //}
}
mysqli_close($conn);
?>

</div>

</div>
</div>
<div class="lastPart clear">
<b></b>OSA Consulting Tech<br></b>
Dhaka, Bangladesh
</div>
</body>
</html>