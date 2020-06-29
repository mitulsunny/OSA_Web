
<?php
session_start();
if(isset($_SESSION['uname'])){
 if (time()-$_SESSION['timestamp']>600){
    session_destroy();
    session_unset();
    header("Location: /forum_test.html");
}else{
    $_SESSION['timestamp']=time();
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--   <meta name="viewport" content="width=device-width, initial-scale=1">-->
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="w3.css">
   <script src="jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
        
    <title>
        Student
    </title>
    <style>
       #header {
            width:100%;
            background-color:#0606e0;
/*            border-bottom: 15px solid gray;*/
            overflow: hidden; 
        }
        #first {
            width: 350px;
            float:left; 
            background-color: aqua;
        }
        #second {
            border: 1px solid green;

        }
        #second input{
            float:right;
        }
         .printName{
            background-color:gray;
            height:25px;
            color:white;
            font-size: 18px;
            text-align: right;
            padding-right:15px;
            padding-bottom:5px;
        }
        
        #your_name{
            padding: 20px 5px 20px 5px;
            background-color:#0606e0;
            color:white;
            font-size: 20px;
            border: 2px solid #0606e0;
        }
        #butn{
            padding:5px;
            background-color:#0606e0; 
            border: 2px solid #0606e0;
            color:gray;
            font-size:20px;
            margin-right:15px;
            
        }
        
    </style>
    </head>

    <body>
<!--    <div class="header">-->
<div id="header">
    <div id="first">
        <img src="full_logo.png" width="350px">
    </div>
    <div id="second">
<!--        <input id="your_name" type="button" value="Your Name miha ">-->
<!--        <input id="butn" type="button" value="Home Page">-->
    </div>
    
</div>
<div class="printName">
     <label><?php echo Welcome," ".$_SESSION['uname'];?></label>
</div>         
<!--    </div>-->
<div id='cssmenu'>
        <ul>
            <li><a href="/final_forum/forum/student_final/student_page.php">Interview Questiones</a></li>
            <li><a >Study Materials</a></li>
            <li><a >Class Projects</a></li>
            <li><a >Goup Discussion</a></li>
            <li><a>Profile</a></li>
            <li><a href="destroy_session.php" id="btn_logout" name="btn_logout">Logout</a></li>
        </ul>
</div> 
       
 <br>
<div class="w3-container">
  <h2>Next Steps of Your Career</h2>
</div>

<div class="w3-row-padding">

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-green w3-xlarge w3-padding-32">Certifications</li>
    <li class="w3-padding-16"><b>Networking</b></li>
    <li class="w3-padding-16"><b>Oracle</b> </li>
    <li class="w3-padding-16"><b>A+</b> </li>
    <li class="w3-padding-16"><b>Cisco</b></li>
<!--
    <li class="w3-padding-16">
      <h2 class="w3-wide">$ 10</h2>
      <span class="w3-opacity">per month</span>
    </li>
-->
    <li class="w3-light-grey w3-padding-24">
      <button class="w3-button w3-green w3-padding-large">Sign Up</button>
    </li>
  </ul>
</div>

<div class="w3-third w3-margin-bottom">
  
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-green w3-xlarge w3-padding-32">Courses</li>
    <li class="w3-padding-16"><b>Mobile App Development</b></li>
    <li class="w3-padding-16"><b>Scrum Master</b></li>
    <li class="w3-padding-16"><b>Web Design</b></li>
    <li class="w3-padding-16"><b>Automatin Testing</b></li>
<!--
    <li class="w3-padding-16">
      <h2 class="w3-wide">$ 25</h2>
      <span class="w3-opacity">per month</span>
    </li>
-->
    <li class="w3-light-grey w3-padding-24">
      <button class="w3-button w3-green w3-padding-large">Sign Up</button>
    </li>
  </ul>
</div>

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-green w3-xlarge w3-padding-32">OSA's News</li>
    <li class="w3-padding-16"><b>Available Job</b></li>
    <li class="w3-padding-16"><b>Start A New Batch</b></li>
    <li class="w3-padding-16"><b>Up Comming Event</b></li>
    <li class="w3-padding-16"><b>Reservation</b></li>
    <li class="w3-light-grey w3-padding-24">
      <button class="w3-button w3-green w3-padding-large">Reserve</button>
    </li>
  </ul>
 </div>

</div>
        
        
<!--      <iframe src="https://calendar.google.com/calendar/embed?src=mitulsunny8%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->
        
        
        
        
    </body>
</html>
<?php
}
}else{
    header("Location: /forum_test.html");
}
?>