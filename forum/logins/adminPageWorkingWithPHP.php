<?php
session_start();
if(isset($_SESSION['user'])){
?>
<html>
    <head>
	<title>
		Admin Page
	</title>
	<script src="querymy.js"></script>
	<style>
	.templete{width:1060px; background:white; color:black; margin:0 auto;}
    .clear{overflow:hidden;}
	.firstPart{background-color: darkblue;
		color:white;
		font-size:30px;
		text-align:center;
		border-bottom:6px solid #9d16be;
		border-left:2px solid black;
		border-right:2px solid black;
		}
	.secondPart{
        border:2px solid #9d16be;
        height: 760px;
        
    }
        .logo{
        margin-left:-3px;
        margin-top:-2px;
        width:400px;
            
        }
        .leftColum{
            background-color:gainsboro;
            width:400px;
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
            width:350px;
            padding-left:15px;
            line-height:50px;
            text-decoration: none;
            list-style:none;
            position:relative;
            top:-52px;
            left:-28px;
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
        .left_pipe{
            width:10px;
            height:591px;
            background-color:blue;
            position:relative;
            left:0px;
            top:-600px;
            border-bottom:6px solid white;
            border-top:2px solid white;
        }
        .rightcolumn_top{
            width:660px;
            height:440px;
            background-color:#d8d2d2;
            position:relative;
            left:399px;
            top:-200px;
        }
          .rightcolumn_bottom{
            width:660px;
            height:320px;
            position:relative;
            left:399px;
            top:-245px;
            background-color:#d8d2d2;
        }
        #button li{
            background-color:blue;
            font-size:35px;
            color:white;
            padding:5px;
            width:310px;
            border:2px solid white;
            text-decoration: none;
            list-style:none;
            position:relative;
            display:block
        }
        #menu{
            text-align: center;
            width:314px;
            height:55px;
            background-color: darkblue;
            color:white;
            font-size:45px;
            padding:5px;
        }
        .top_left{
            position:relative;
            left:-35px;
            top:-11px;
            
        }
        .adm{
            position:relative;
            left: 335px;
            top:-328px;
        }
        .but{
            position:relative;
            top:-36px;
        }
        .but1{
            position:relative;
            left: 295px;
            top:-364px;
        }
        .sys{
            text-align: center;
            width:650px;
            height:55px;
            background-color: darkblue;
            color:white;
            font-size:45px;
            padding:5px;
        }
        .sysLeft{
            position:relative;
            left: -35px;
            top:-35px;
        }
        .sysRight{
           position:relative;
            left: 295px;
            top:-267px; 
        }
        .right_top_menu{
            background-color:black;
            position:relative;
            color:pink;
            padding:20px;
            font-size:40px;
            text-align:center;
            line-height: 70px;
            top:27px;
            width:657px;
            height:60px;
        }
	</style>
	</head>
<body>
<div class="firstPart templete clear">
		<h1 class="header">OSA Consulting Tech</h1>
</div>
<div class="secondPart templete clear">
            <div class="leftColum">
                <img class="logo" src="logo.png">
                <center>
                <h1 class="common">Common Info</h1>
                </center>
                <ul class="leftMenu">
                <li><a href="logoutHelper.php">Logout</a></li>
                <li><a href="/Forum/questions/api_interview_question.php">Interview Questions</a></li>
                <li><a href="https://www.google.com">Mentoring Schedule</a></li>
                <li><a href="/Forum/classMeterials/readFile.php">Class Materials</a></li>
                <li><a href="https://webmail.hostinger.com">Email</a></li>
                <li><a href="https://www.google.com">Practice Quize</a></li>
                <li><a href="https://www.google.com">Certification Exam</a></li>
                <li><a href="https://www.google.com">Course Payment</a></li>
                <li><a href="https://www.google.com">Event</a></li>
                <li><a href="https://www.google.com">Profile</a></li>
                
                <li><a href="add_question.html">Add New Question</a></li>
                <li style="border-bottom: 6px solid white;"><a href="https://www.google.com" >Help</a></li>
                </ul>
            </div>  
      <div class="left_pipe">
          <div class="rightcolumn_top" id="button">
               <div class="right_top_menu">
        Be Careful In Your Business Engin
    </div>
              <div class="top_left">
                  <ul>
                      <p id="menu">Students</p>
                      <div class="but">
                      <li>Create Account</li>
                      <li>Search Studnt</li>
                      <li>Mentoring Schedule</li>
                      </div>
                      
                  </ul>
              </div>
              <div class="top_right">
                  <p id="menu" class="adm">Admin<p>
                  <ul class="but1">
                  <li>Create Account</li>
                  <li>Update Profile</li>
                   </ul>
              </div>
          </div>
          <div class="rightcolumn_bottom" id="button">
              <p class="sys">System<p>
               <ul class="sysLeft">
                   <li><a href="/logins/add_question.html">Add New Question</a></li>
                  <li>Update Question</li>
                  <li>Search Question</li>
                  <li> Add Question Note</li>
                </ul>
              <ul class="sysRight">
                  <li>New Topics</li>
                  <li>New Topics</li>
                  <li>New Topics</li>
                  <li> New Topics</li>
                </ul>
          </div>
      </div>
</div>
<div class="lastPart templete clear">
    <br><b>OSA Consulting Tech<br></b>
    New York, USA
</div>
</body>
</html>
    <?php
    //header("Location: adminPage.php");
}else{
    header("Location: forum_login.html");
   
}
?>
