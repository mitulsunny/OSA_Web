<?php
session_start();
if(isset($_SESSION['user'])){
 if (time()-$_SESSION['timestamp']>600){
    session_destroy();
    session_unset();
    header("Location: forum_login.html");
}else{
    $_SESSION['timestamp']=time();
?>
<html>
    <head>
	<title>
		Student Login Page
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
        width:323px;
            
        }
        .leftColum{
            background-color:gainsboro;
            width:320px;
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
            width:240px;
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
            left:1px;
            top:-620px;
            border-bottom:6px solid white;
        }
        .rightcolumn_top{
            width:740px;
            height:440px;
            background-color:white;
            position:relative;
            left:319px;
            top:-140px;
        }
          .rightcolumn_bottom{
            width:740px;
            height:320px;
            position:relative;
            left:319px;
            top:-140px;
            background-color:white;
        }
        .top_right{
            border:12px solid blue;
            height:400px;
            width:715px;
        }
        .bottomLine{
            width:739px;
            height:12px;
            background-color:blue;
            position:relative;
            top:0px;
            left:0px;
        }
        .rightcolumn_bottom{
            width:717px;
            height:303px;
            border: 12px solid blue;
            position:relative;
            top:-149px;
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
                <li><a href="/Forum/questions/java_interview_question.php">Interview Questions</a></li>
                <li><a href="/Forum/classMeterials/readFile.php">Class Materials</a></li>
                <li><a href="https://www.google.com">Group Discussion</a></li>
                <li><a href="https://webmail.hostinger.com">Email</a></li>
                <li><a href="https://www.google.com">Practice Quize</a></li>
                <li><a href="https://www.google.com">Certification Exam</a></li>
                <li><a href="https://www.google.com">Course Payment</a></li>
                <li><a href="https://www.google.com">Event</a></li>
                <li><a href="https://www.google.com">Profile</a></li>
                <li style="border-bottom: 6px solid white;"><a href="https://www.google.com" >Help</a></li>
                </ul>
            </div>  
      <div class="left_pipe">
          <div class="rightcolumn_top">
              <div class="top_left">
              </div>
              <div class="top_right">
                  <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23039BE5&amp;ctz=America%2FNew_York&amp;src=bWl0dWxzdW5ueThAZ21haWwuY29t&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%237986CB&amp;color=%230B8043&amp;title=OSA%20Consulting%20Tech" style="border-width:0" width="715" height="440" frameborder="0" scrolling="no"></iframe>
              </div>
              <div class="bottomLine">
                  
              </div>
          </div>
          <div class="rightcolumn_bottom">
              
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
}
}else{
    header("Location: forum_login.html");
}
?>