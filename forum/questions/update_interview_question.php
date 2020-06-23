
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
	All Questions
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
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
        .answers textarea{
   
            text-align:left;
            font-size:20px;
        }
        .submit{
            background-color:blue;
            color:white;
            font-size:20px;
            height:35px;
            width:150px;
            position:relative;
            left:700px;
            top:-35px;
            text-align:center;
        }
        
	</style>
	</head>
<body>
<div class="firstPart templete clear">
	<img class="logo" src="logo.png">
		<h1 class="header">OSA Consulting Tech</h1>
    
        <div class="sub">Java Questions</div>
    
    
</div>
<div class="secondPart templete clear">
            <div class="leftColum">
                <center>
                <h1 class="common">All Topics</h1>
                </center>
                <ul>
                 <li><a href="/Forum/logins/studentLogin.php">Forum</a></li>
                <li class="select"><a href="java_interview_question.php">Java</a></li>
                <li><a href="selenium_interview_question.php">Selenium</a></li>
                <li><a href="junit_interview_question.php">JUnit</a></li>
                <li><a href="testng_interview_question.php"> TestNG</a></li>
                <li><a href="cucumber_interview_question.php">Cucumber</a></li>
                <li><a href="collection_interview_question.php">Collection</a></li>
                <li ><a href="api_interview_question.php">API</a></li>    
                <li><a href="jenkin_interview_question.php">Jenkin</a></li>
                <li><a href="https://www.google.com">Others</a></li>
                <li style="border-bottom: 6px solid white;">
                 <a href="/Forum/logins/logoutHelper.php">Logout</a></li>
                 <li><a href="update.php">Update</a></li>
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
$sql = "SELECT question, answer, note, topic, QuestionId from Questions";

//query the databae
//$rs = mysqli_query($conn,$sql);
$result= $conn->query($sql);
?>
<div class="middlePart templete clear">
 <?php
//while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
while($row=mysqli_fetch_assoc($result)){
           echo 'id :<br><input type="text" readonly="readonly" style="font-size: 12pt" id="QuestionId'.$row['QuestionId'].'" value="'.$row['QuestionId'].'">';?> <br><?php
     echo 'Question:<br><input type="text" style="font-size: 12pt" id="question'.$row['QuestionId'].'" size="100" value="'.$row['question'].'">';?> <br><?php
  echo  'Answer:<br><textarea type="text" style="font-size: 12pt" cols="100" rows="10" id="answer'.$row['QuestionId'].'" size="100"> '.$row['answer'].''; echo '</textarea>' ?><br><?php
 echo 'Topic:<br><input type="text" style="font-size: 12pt" id="topic'.$row['QuestionId'].'" size="50" value="'.$row['topic'].'">';?> <br>
          <div class="submit" <button type="submit" id="<?php echo "update".$row['QuestionId'];?>">UPDATE</button></div>
          <hr>
         
        
    <script>
            $(document).ready(function(){
                $("<?php echo "#update".$row['QuestionId'];?>").click(function(){
                    var question=$("<?php echo "#question".$row['QuestionId'];?>").val();
                    var answer=$("<?php echo "#answer".$row['QuestionId'];?>").val();
                    //var answer=$("#answer").val();
                    var topic=$("<?php echo "#topic".$row['QuestionId'];?>").val();
                    //var topic=$("#topic").val();
                    var QuestionId=$("<?php echo "#QuestionId".$row['QuestionId'];?>").val();
                   // var QuestionId=$("#QuestionId").val();
                    $.ajax({
                        url:'update.php',
                        method:'POST',
                        data:{
                            question1:question,
                           answer:answer,
                            topic:topic,
                           QuestionId:QuestionId
                           //echo  'Answer: <input type="text" id="answer'.$row['QuestionId'].'" size="100" value="'.$row['answer'].'">';?> <br>
                            //question:question,
                           // answer:answer,
                           // topic:topic,
                           // QuestionId:QuestionId
                           
                           
                        },
                        success:function(response){
                            alert(response);
                        }
                    });
                });
            });
        </script>
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
//}
}else{
    header("Location: /Forum/logins/forum_login.html");
}
?>