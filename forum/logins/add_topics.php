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
        .frame{
            border: 2px solid black;
            width:400px;
            height:400px;
            position:relative;
            left:550px;
            top:-700px;
            
        }
        .button{
            position:relative;
            left:-12px;
        }
        .addButton{
            width:200px;
            
            font-size:30px;
            background-color:blue;
            
            
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
                <li><a href="/Forum/logins/add_question.php">Add Question</a></li>
                <li style="border-bottom: 6px solid white;"><a href="forum_login.html" >Logout</a></li>
                </ul>
            </div> 
<div class="frame"><br><br>
<div class="questions">
      <center>
<form name="myForm" >
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
<select name="position" id="topics" style="font-size:20pt">
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
<br><br>
<input type="text" name="topicName" id="topicName" placeholder="Question Topic"style="font-size:20pt"><br><br>
<input type="text" name="buttonText" id="buttonText" placeholder="Button Text "style="font-size:20pt"><br><br>
<input type="text" name="displayText" id="displayText" placeholder="Display Text "style="font-size:20pt"><br><br>
<div class="button">
<button type="submit" onclick="addQuestion();"><span class="addButton">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></button>
</div>
</form>
</center>
</div>
<script tyep="text/javascript">
	function addQuestion(){
	var topic=document.getElementById("topicName").value;
	var buttonText=document.getElementById("buttonText").value;
	var displayText=document.getElementById("displayText").value;
var dataString='topic1='+topic+'&buttonText1='+buttonText+'&displayText1='+displayText;
	if(topic==''||buttonText==''){
 	alert("Topic or Button Text can not be empty");
 }else {
	// AJAX code to submit form.
$.ajax({
type: "POST",
url:"add_topic_in_database.php",
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