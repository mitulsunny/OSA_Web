<!DOCTYPE html>
<html>
    <head>
	<title>
		Sutent Page
	</title>
	<script src="querymy.js"></script>
	<style>
	.templete{width:95%; background:white; color:black; margin:0 auto;}
    .clear{overflow:hidden;}
	.firstPart{background-color: darkblue;
		color:white;
		font-size:30px;
		
		border-bottom:6px solid #9d16be;
		border-left:2px solid black;
		border-right:2px solid black;
        height:150px;
        
        
		}
        .header{
            position:relative;
            top:-95px;
            text-align:center;
        }
	.secondPart{
        border:2px solid #9d16be;
        height: 960px;
        
    }
        .logo{
        margin-left:0px;
        margin-top:0px;
        width:250px;
        height:80px;
        }
        .sub{
            font-size: 30px;
            color:black;
        }
        .leftColum{
            background-color:gainsboro;
            width:200px;
            height:760px;  
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
       .leftMenu li{
            background-color:blue;
            color:white;
            border:2px solid white;
            font-size:28px;
            width:180px;
            padding-left:15px;
            line-height:50px;
            text-decoration: none;
            list-style:none;
            position:relative;
            top:-52px;
            left:-38px;
            border-top-right-radius: 10px;
            display:block
        }
        .leftMenu li a{
            background-color:blue;
            color:white;
            border-top-right-radius:10px;
            text-decoration: none;
            list-style:none;
            position:relative;
            display:block;
        }
        .questions{
            background-color:antiquewhite;
            width:83%;;
            height:700px;
            position:relative;
            left:210px;
            top:-700px;
        }
	</style>
	</head>
<body>
<div class="firstPart templete clear">
	<img class="logo" src="logo.png">
		<h1 class="header">OSA Consulting Tech</h1>
    <div class="sub">Make Your Career In IT</div>
</div>
<div class="secondPart templete clear">
            <div class="leftColum">
           
                <center>
                <h1 class="common">All Topics</h1>
                </center>
                <ul class="leftMenu">
                <li><a href="/Forum/logins/adminPage.php">Admin Page</a></li>
                 <li><a href="/Forum/logins/add_topics.php">Add Topic</a></li>
                </ul>
            </div> 
<div class="questions">
      <center>
<form name="myForm" >
    Topics:<br>
    
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

//create the SQL statement
$sql = "SELECT * from Topics";

//query the databae
$rs = mysqli_query($conn,$sql);
?>
<select name="position" id="topics" style="font-size:16pt">
<?php

while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
    echo $row[''];
   ?> 

       <option value="<?php echo $row['topic'];?>" ><?php echo $row['buttonTex'];?></option>
    
<?php
}
?>
</select>
<?php
mysqli_close($conn);
?>
    <select name="position" id="topics" style="font-size:16pt">
				  <option value="java" >Java Interview Question</option>
				  <option value="selenium">Selenium Interview Question</option>
				  <option value="database">SQL Interview Question </option>
				  <option value="testNG">TestNG Interview Question </option>
				  <option value="junit">Junit Interview Question </option>
				   <option value="maven">Maven Interview Question</option>
				  <option value="log4j">Log4J Interview Question</option>
				  <option value="jenkin">Jenkin Interview Question </option>
				  <option value="collection">Collection Interview Question </option>
				   <option value="agile">Agile Interview Question </option>
				   <option value="behavioral">Behavioral Interview Question </option>
				  <option value="others">Others Interview Question </option>
				   <option value="api">API Interview Question </option>
				  <option value="git">Git Interview Question </option>
				  <option value="extent">Extents Report Interview Question </option>
				  <option value="cucumber">Cucumber Interview Question </option>
				 
			</select>
	<br><br><br>Question:<br>
<textarea type="text" name="question" id="question" rows="3" cols="150"  style="font-size: 12pt"></textarea><br><br>
Answer:<br>
<textarea type="text" name="answer" id="answer" rows="16" cols="150" style="font-size:12pt"></textarea><br><br>
Comments:<br>
<textarea type="text" name="comments" id="comments" rows="2" cols="150" style="font-size:12pt"></textarea>
<div class="addButton">
<input type="submit" onclick="addQuestion();" value="Add"/>
</div>
</form><br>
</center>
<script tyep="text/javascript">
	function addQuestion(){
	var question=document.getElementById("question").value;
	var answer=document.getElementById("answer").value;
	var comments=document.getElementById("comments").value;
	var topics=document.getElementById("topics").value;
var dataString='question1='+question+'&answer1='+answer+'&comments1='+comments+'&topics1='+topics;
	if(question==''||answer==''){
 	alert("Question or answer box can not be empty");
 }else {
	// AJAX code to submit form.
$.ajax({
type: "POST",
url:"add_questions.php",
data: dataString,
cache: false,
success: function(html) {
alert("New Question has been added!!!!");
}
});
document.form.reset();
}
return false;
 }
</script>


</div>
</div>
<div class="lastPart templete clear">
    <br><b>OSA Consulting Tech<br></b>
    New York, USA
</div>

</body>
</html>