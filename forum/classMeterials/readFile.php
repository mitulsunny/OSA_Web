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
		All Downloadable File
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
     
        .table{
            height:25px;
            font-size:30px;
             background-color:blue;
             width:300px;
            color:white;
            text-align:center;
        }
        .table tr td{
            width:250px;
        }
        .date{
            font-size:15px;
        }
        .dateRow{
            height:16px;
        }
        .down{
            font-size:20px;
        }
        .eachItem{
            background-color:#E6E6FA;
            border:3px solid white;
            width:300px;
            padding:2px;
        }
        .rightElement{
            position:relative;
            left:370px;
            top:-120px;
        }
	</style>
	</head>
<body>
<div class="firstPart templete clear">
	<img class="logo" src="logo.png">
		<h1 class="header">OSA Consulting Tech</h1>
    
        <div class="sub">Downloadable File</div>
    
    
</div>
<div class="secondPart templete clear">
            <div class="leftColum">
                <center>
                <h1 class="common">Class File</h1>
                </center>
                <ul>
                <li><a href="/Forum/logins/studentLogin.php">Forum</a></li>
                 <a href="/Forum/logins/logoutHelper.php">Logout</a></li>
                </ul>
            </div> 
<div class="questions">
<br>



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
?> 
		 
<?php
//create the SQL statement
$sql = "SELECT FileId, FileName, TemFileName, InsertedTime from ClassFile order by FileId desc";

//query the databae
$rs = mysqli_query($conn,$sql);
$count=2;
?>
<div class="middlePart templete clear">
 <?php
while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
   
    // If you want to display the results one by one
    echo $row[''];
 if($count%2==0){
         $count++;
?>

<div class="eachItem">
<table>
<tr class="table">
   <td class="table"><?php echo $row['FileName']; ?></td>
</tr>

<tr class="dateRow">
  <td class="date"><?php echo $row['InsertedTime']; ?></td>
</tr>
<tr class="down">
  <td ><a href="/Forum/classMeterials/uploads/<?php echo $row['TemFileName'];?>" download> 
 <span><button class="down" type="button"><b>Download</b></button></span></a></td>
</tr>
</table>
</div>
<?php
}else if($count%2==1){
    $count++;
?>
  <div class="rightElement">
  <div class="eachItem">
<table>
<tr class="table">
   <td class="table"><?php echo $row['FileName']; ?></td>
</tr>

<tr class="dateRow">
  <td class="date"><?php echo $row['InsertedTime']; ?></td>
</tr>
<tr class="down">
  <td ><a href="/Forum/classMeterials/uploads/<?php echo $row['TemFileName'];?>" download> 
 <span><button class="down" type="button"><b>Download</b></button></span>
</a>
</td>
</tr>
</table>
</div>
  </div>
  
<?php    
}
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
else{
    header("Location: /Forum/logins/forum_login.html");
}
?>