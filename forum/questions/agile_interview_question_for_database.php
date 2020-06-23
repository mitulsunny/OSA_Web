<?php
session_start();
if(isset($_SESSION['user'])){
 if (time()-$_SESSION['timestamp']>600){
    session_destroy();
    session_unset();
    header("Location: /Forum/logins/forum_login.html");
}else{
    $_SESSION['timestamp']=time();
?>

<html>
    <head>
	<title>
	Agile Questions
	</title>
	<script src="querymy.js"></script>
	<style>
	.templete{width:95%; background:white; color:black; margin:0 auto;}
    .clear{overflow:hidden;}
	.firstPart{background-color: darkblue;
		color:white;
		font-size:25px;
		padding-top:10px;
		border-bottom:6px solid #9d16be;
		border-left:2px solid black;
		border-right:2px solid black;
        height:90px;
        
        
		}
        .header{
            position:relative;
            top:-95px;
            text-align:center;
    
        }
	.secondPart{
        border:2px solid #9d16be;
        height: 800px;
        
    }
        .logo{
        margin-left:0px;
        margin-top:0px;
        width:250px;
        height:80px;
        }
        .sub{
            border:2px white solid;
            width:250px;
            border-radius:15px;
            font-size: 30px;
            color:blue;
            font-style:bold;
            background-color:white;
            position:relative;
            text-align: center;
            left:75%;
            top:-180px;
        }
        .leftColum{
            background-color:gainsboro;
            width:200px;
            height:780px;  
        }
        .common{
            background-color:darkblue;
            color:white;
            padding:10px;
            position:relative;
            top:-25px;
            font-size:40px; 
        }
        .rightColumn{
            background-color:lightyellow;
            width:660px;
            height:760px;
            position:relative;
            right:-400px;
            top:-800px;
        }
       .lastPart{
	    height:100px;
	    background:blue;
	    border-left:2px solid black;
		border-right:2px solid black;
	    color:white;
	    font-size:20px;
	    }
       .select{
            background-color:#8585dd;  
        } 
        .select a{
            color:darkblue;
        }
        ul li{
            background-color:blue;
            font-size: 30px;
            border:2px solid white;
            list-style: none;
            height:50px;
            position:relative;
            top:-50px;
            left:-35px;
            width:190px;
        }
        ul li a{
            color:white;
            text-decoration: none;
            display:block;
            position:relative;
            left: 25px;
            line-height: 50px;
  
        }
        
        .questions{
            background-color:white;
            font-size:20px;
            line-height:25px;
            text-align: justify;
            width:79%;;
            height:800px;
           overflow:auto;
            position:relative;
            left:210px;
            top:-810px;
            padding-left:25px;
            padding-right:25px;
        }
	</style>
	</head>
<body>
<div class="firstPart templete clear">
	<img class="logo" src="logo.png">
		<h1 class="header">OSA Consulting Tech</h1>
    
        <div class="sub">Agile Questions</div>
    
    
</div>
<?php
//First step: connect to the database
//set the variables ...
$servername = "localhost";
$username = "u185312781_tech";
$password = "01723Sunny@";
$dbname = "u185312781_osa";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "SELECT * from Topics";
$rs1 = mysqli_query($conn,$sql1);
while($row1 = mysqli_fetch_array($rs1,MYSQLI_ASSOC)) {
 echo $row1['topic']; ?><br><?php echo $row1['buttonTex'];?><br><?php 
}
?> 

<div class="secondPart templete clear">
            <div class="leftColum">
                <center>
                <h1 class="common">All Topics</h1>
                </center>
                <ul>
                 
                <li><a href="https://www.google.com">Others</a></li>
                <li style="border-bottom: 6px solid white;">
                 <a href="/Forum/logins/logoutHelper.php">Logout</a></li>
                </ul>
            </div> 
<div class="questions">
<br>




		 
<?php
//create the SQL statement
$sql = "SELECT question, answer, note, topic from Questions";

//query the databae
$rs = mysqli_query($conn,$sql);

$count=0;
?>
<div class="middlePart templete clear">
 <?php
while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
   
    // If you want to display the results one by one
    echo $row[''];
    if($row['topic']=="agile"){
         $count++;
?>
   &nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $count .") ". $row['question']; ?> </b><br>
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<I><b>Answer:</b></I> <?php echo $row['answer'];?><br><br><br>
<?php
 }
}
mysqli_close($conn);
?>
<br>
</div>
</div>
<div class="lastPart templete clear">
    <br><b>OSA Consulting Tech<br></b>
    New York, USA
</div>

</body>
</html>

<?php
}
}else{
    header("Location: /Forum/logins/forum_login.html");
}
?>