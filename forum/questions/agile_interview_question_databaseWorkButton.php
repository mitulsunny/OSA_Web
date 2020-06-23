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
<div class="secondPart templete clear">
            <div class="leftColum">
                <center>
                <h1 class="common">All Topics</h1>
                </center>
                <ul>
                 <li><a href="/Forum/logins/studentLogin.php">Forum</a></li>
                <li ><a href="java_interview_question.php">Java</a></li>
                <li><a href="selenium_interview_question.php">Selenium</a></li>
                <li><a href="junit_interview_question.php">JUnit</a></li>
                <li><a href="testng_interview_question.php"> TestNG</a></li>
                <li><a href="cucumber_interview_question.php">Cucumber</a></li>
                <li><a href="collection_interview_question.php">Collection</a></li>
                <li ><a href="api_interview_question.php">API</a></li>    
                <li><a href="jenkin_interview_question.php">Jenkin</a></li>
                 <li class="select"><a href="agile_interview_question.php">Agile</a></li>
                 <li><a href="behavioral_interview_question.php">Behavioral</a></li>
                 <li><a href="log4j_interview_question.php">Log4J</a></li>
                <li><a href="agile_interview_question_for_database.php">Database</a></li>
                <li style="border-bottom: 6px solid white;">
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

?><button type="button" onClick="myFunction()">Read</button>



<script tyep="text/javascript">
	function myFunction(){
	    var $topic="java";
var dataString='topic1='+topic;
	// AJAX code to submit form.
$.ajax({
type: "POST",
url:"agile_interview_question_database_helper.php",
data: dataString,
cache: false,
success: function(dataString) {
alert(dataString);
}
});

return false;
 }
</script>

<?php
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