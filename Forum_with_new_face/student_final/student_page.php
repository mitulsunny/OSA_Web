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
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="script.js"></script>
   <title>Interview Questions</title>
   <style>
        textarea{
                /*resize:none;*/
                overflow:hidden;
                height:100%;
                width:100%;
                overflow-y: scroll;
  
    }
   .logo {
            max-width: 40px;
            height: auto; /* So the image doesn't distort */
           }
    #header {
            width:100%;
            background-color:#0606e0;
/*            border-bottom: 15px solid gray;*/
            overflow: hidden; 
    }
    .header{
          font-size:30px;
          position: relative;
          top:-7px;
          left:10px;
           }
        #publish_btn{
          position: relative;
          top:-7px;
          left:100px;
           }
          
       .printName{
            background-color:gray;
            height:25px;
            color:white;
            font-size: 18px;
            text-align: right;
            padding-right:20px;
            padding-bottom:5px;
        }
           .left_header{
           width:700px;
           background-color:black;
           border:5px solid white;
           }
           #topicValue{
               background-color:#FFFFFF;
               padding:0px 2% 2% 2%;
               font-size:20px;
            
           }
           
   </style>
</head>
<body onload="changeColor('Java');showCustomer('Java');" >
<!--Header will start from here-->
    <div id="header">
    <div id="first">
        <img src="full_logo.png" width="350px">
    </div>
    <div id="second">
<!--        <input id="your_name" type="button" value="Your Name miha ">-->
      <!--<input id="butn" type="button" value="Publish Page">-->
     
    </div>
    
</div>
</div>
<div class="printName">
     <label><?php echo Welcome," ".$_SESSION['uname'];?></label>
</div>     
    
    
    


<!--<div class="headerOne">        -->
<!--    &nbsp;&nbsp;&nbsp;&nbsp;-->
<!-- <img src="full_logo.png" height="58px" width="300px">-->
<!-- <button >Student Page</button>-->
<!--  <button >Your Name</button>-->
<!--</div>-->


   <?php
        include_once('db_connection.php');
        $sql = "SELECT pageName, pageValue from Page_Production";
        $rs = mysqli_query($conn,$sql);?>
        <div id='cssmenu'>
        <ul>

   <?php
   
        while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
         echo $row[''];?>
       <li ><a class="button" id="<?php echo $row['pageName'];?>"name="my_button" onClick="showCustomer('<?php echo $row['pageName'];?>');changeColor(id);"><?php echo $row['pageName'];?></a></li>
        <?php
        }?>
         <li ><a href="/final_forum/forum/student.php" >Student Page</a></li>
          </ul>
          </ul>
       </div>
        <?php
        mysqli_close($conn);
        ?>
 <!--READ THE BUTTON NAME FROM DATABASE-->
 
 <script>
 function readValue(){
 <?php
        include_once('db_connection.php');
        $sql = "SELECT pageName, pageValue from Page_Production";
        $rs = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
         echo $row[''];
          echo $row['pageName'];
        }?>
 }
 </script>
 <!--Reading the value from database questions and answer-->
<p id="topicValue"></p>



 <script>
 //THIS METHOD IS READING THE THE VALUE TO SET IN INPUT BOX AND 
 //TEXTAREA FILE
function showCustomer(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var text=xhttp.responseText.split('|');  
      document.getElementById("topicName").value=text[0];
      document.getElementById("topicValue").innerHTML=text[1];
       document.getElementById("pageId").value=text[2];
    }
  };
  xhttp.open("GET", "readValue.php?q="+str, true);
  xhttp.send();
}

//This method is used for changing the active button color
 function changeColor(id) {    
        var tabs = document.getElementsByClassName('button')
        for (var i = 0; i < tabs.length; ++i) {
            var item = tabs[i];
             item.style.backgroundColor = (item.id == id) ? "#EC407A" : "#0606e0";
        }
    }
</script>
  <br> <center> <input type="hidden" name="pageId" id="pageId">
  <input type="hidden" name="topicName" id="topicName">
</body>
<html>
<?php
}
}else{
    header("Location: /forum_test.html");
}
?>

